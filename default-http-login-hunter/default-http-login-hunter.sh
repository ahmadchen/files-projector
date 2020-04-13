#!/usr/bin/env bash
#
# Check for http default logins using nmap http-default-accounts.nse script
# with alternate fingerprint dataset https://github.com/nnposter/nndefaccts
#
# Version: 1.0
# Contact: developerpaceusa@gmail.com
#######################################################################

mydir="$(cd "$(dirname "${BASH_SOURCE[0]}")" >/dev/null 2>&1 && pwd)"
nmap_http_nse_script="${mydir}/http-default-accounts.nse"
nndefaccts_fingerprints="${mydir}/http-default-accounts-fingerprints-nndefaccts.lua"
nndefaccts_fingerprints_url="https://raw.githubusercontent.com/nnposter/nndefaccts/master/http-default-accounts-fingerprints-nndefaccts.lua"

# Make sure we have nmap's http-default-accounts.nse script
if [ ! -f "${nmap_http_nse_script}" ]; then
  nmap_http_nse_script="/usr/share/nmap/scripts/http-default-accounts.nse"
  if [ ! -f "${nmap_http_nse_script}" ]; then
    echo "ERROR: Can't find the http-default-accounts.nse script"
    exit 1
  fi
fi

# Make sure we have nndefaccts fingerprints
if [ ! -f "${nndefaccts_fingerprints}" ] || [ "$1" == "update" ]; then
  wget -O "${nndefaccts_fingerprints}" "${nndefaccts_fingerprints_url}"
  if [ ! -f "${nndefaccts_fingerprints}" ]; then
    echo "ERROR: Can't find nor download the http-default-accounts-fingerprints-nndefaccts.lua"
    exit 1
  fi
  if [ "$1" == "update" ]; then
    exit 0
  fi
fi

###############################################

parse_url() {
  url="$1"
  if [ -z "${url}" ]; then
    echo "usage: ${FUNCNAME[0]} <URL>"
    return 1
  fi

  hostport="${url#*://}"
  hostport="${hostport%%/*}"
  proto="${url%%://*}"
  host="${hostport%%:*}"
  if [ "${proto}" == "${url}" ] || [ "${proto}" == "${host}" ]; then
    proto="http"
  fi
  port="${hostport##*:}"
  if [ "${port}" == "${hostport}" ] || [ "${port}" == "${host}" ]; then
    if [ "${proto}" == "http" ]; then
      port="80"
    elif [ "${proto}" == "https" ]; then
      port="443"
    fi
  fi
  host="${host,,}"
}

check_default_http_login() {
  url="$1"
  if [ -z "${url}" ]; then
    echo "usage: ${FUNCNAME[0]} <URL>"
    return 1
  fi

  proto=""; host=""; port=""
  parse_url "${url}"
  
  # Check if we already have result
  mkdir http.default.logins &>/dev/null
  out="http.default.logins/${host}.${port}.${proto}.login.nmap"
  if [ -f "${out}" ]; then
    echo "`date`: already tried default http logins on ${proto}://${host}:${port}/"
    if [ $((verbose)) -le 0 ]; then
      grep '^|' "${out}"
    elif [ $((verbose)) -le 1 ]; then
      grep '^|\|/tcp' "${out}"
    elif [ $((verbose)) -le 2 ]; then
      sed -n '/^Host is /,$p' "${out}"
    elif [ $((verbose)) -ge 3 ]; then
      cat "${out}"
    fi
    return 0
  fi
  touch "${out}"
  
  # Make a copy of the NSE script and adjust the portrule to match our particular port
  http_nse_script_copy="${host}.${port}.${proto}.$$$RANDOM.nse"
  cp -- ${nmap_http_nse_script} ${http_nse_script_copy}
  sed -i "${http_nse_script_copy}" -e "s/^portrule =.*/portrule = shortport.port_or_service( {${port}}, {\"http\", \"https\"}, \"tcp\", \"open\")/"
  
  echo "`date`: trying default http logins on ${proto}://${host}:${port}/"
  nmap -sT -p ${port} -Pn -n -d --script ${http_nse_script_copy} --script-args http-default-accounts.fingerprintfile=${nndefaccts_fingerprints} ${host} >"${out}" 2>&1

  # Display output
  if [ $((verbose)) -le 0 ]; then
    grep '^|' "${out}"
  elif [ $((verbose)) -le 1 ]; then
    grep '^|\|/tcp' "${out}"
  elif [ $((verbose)) -le 2 ]; then
    sed -n '/^Host is /,$p' "${out}"
  elif [ $((verbose)) -ge 3 ]; then
    cat "${out}"
  fi
  
  # Cleanup
  rm -f -- "${http_nse_script_copy}"
}

###############################################
# Main

export verbose=0
while getopts "v" optname; do
  case "$optname" in
     v) ((verbose++));;
  esac
done
shift $(($OPTIND -1))

input="$1"
if [ -z "${input}" ]; then
  echo "usage: $(basename $0) [-vvv] <URL|urls.txt|update>"
  exit 1
fi

if [ -f "${input}" ]; then
  tr -d '\r' <"${input}" | while read url x; do
    check_default_http_login "${url}"
  done
else
  check_default_http_login "${input}"
fi
