#/bin/bash

ipnya="$1"
prefix=$(echo $ipnya | sed 's/\.[0-9]*$//')
dofile="do/$1"
donefile="done/$1"

mkdir -p "do" "done"
# rm do/* > /dev/null 2>&1
# rm done/* > /dev/null 2>&1

echo "" > "do/index.html"
echo "" > "done/index.html"
echo -n "" > "$dofile"
echo -n "0" > "$donefile"

sort_ip() {
  sort -n -t . -k 1,1 -k 2,2 -k 3,3 -k 4,4 "$dofile" > "$dofile.url"
  rm "$dofile" && mv "$dofile.url" "$dofile"
}

linkify() {
  cat "$dofile" | sed -s 's/^/<div class="col-xs-6 col-sm-4 col-md-3"><a oncontextmenu="speedyml('\''/g;s/$/'\''/g;s/$/)" class="btn btn-primary btn-block" href="http:\/\//g' > "$dofile.1"
  paste "$dofile.1" "$dofile" | tr -d "\t" | sed 's/$/\/" target="_blank">/g' > "$dofile.url"
}

combine() {
  if [[ "$1" == "1" ]]; then
    # 3 file
    paste "$dofile.url" "$dofile" "$dofile.response" | sed 's/$/<\/a><\/div>/g' > "$dofile.temp"
    rm "$dofile" "$dofile.url" "$dofile.response"
    mv "$dofile.temp" "$dofile"
    echo "<div id=\"legend\"> <p> Keterangan simbol:<br> <span class=\"label label-warning\"> &nbsp;<i class=\"fa fa-lock\"></i> </span> &nbsp;: IP diproteksi password (biasanya IP modem ADSL). <br> <span class=\"label label-success\"> <i class=\"fa fa-cloud\"></i> </span> &nbsp;: IP menjalankan web server, mikrotik atau server webcam. <br> <span class=\"label label-info\"> &nbsp;<i class=\"fa fa-question\"></i>&nbsp; </span> &nbsp;: Gagal mengidentifikasi layanan karena timeout, pastikan dengan mengaksesnya secara manual (klik). <br> </p> </div> <br>" | cat - "$dofile" > "$dofile.temp" && mv "$dofile.temp" "$dofile"
    rm "$dofile.temp"
  else
    # 2 file
    paste "$dofile.url" "$dofile" | sed 's/$/<\/a><\/div>/g' > "$dofile.temp"
    rm "$dofile" "$dofile.url"
    mv "$dofile.temp" "$dofile"
  fi
}

identify() {
  if [[ "$1" == "1" ]]; then
    # identify
    echo -n "" > "$dofile.response"
    while read line; do
      echo -n "Checking http://$line/ .. "
      curl -o /dev/null --silent --head --write-out '%{http_code}' "http://$line/" > "response" &
      CPID=$!
      sleep 1
      CPSPID=$(ps | grep $CPID | grep -v grep)
      if [ "$CPSPID" != "" ]; then
        # macet
        echo "<span class=\"label label-info\"> <i class=\"fa fa-question\"></i> </span>" >> "$dofile.response"
      else
        response=$(cat "response")
        if [[ "$response" == "200" ]]; then
          echo "<span class=\"label label-success\"> <i class=\"fa fa-cloud\"></i> </span>" >> "$dofile.response"
        else
          if [[ "$response" == "401" ]]; then
            echo "<span class=\"label label-warning\"> <i class=\"fa fa-lock\"></i> </span>" >> "$dofile.response"
          else
            echo " " >> "$dofile.response"
          fi
        fi
      fi
    done < "$dofile"

    rm "response"
  fi
}

fping -agq "$prefix.1" "$prefix.255" 2> /dev/null >> "$dofile" &

PID=$!
sleep 15
PSPID=$(ps | grep $PID | grep -v grep)
if [ "$PSPID" != "" ]; then
  # macet
  kill $PID > /dev/null 2>&1
  sort_ip
  linkify
  identify "$2"
  combine "$2"
else
  sort_ip
  linkify
  identify "$2"
  combine "$2"
fi

echo -n "done" > "$donefile"
