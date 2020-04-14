#!/usr/bin/python
import socket,sys,requests,json,re
subdomains = ['mail','webmail','blog','cpanel','webdisk','demo','news','www','admin','test'] #tambah sendiri
banner = """
####################### @author : Robot Pace Usa
#      Cloud-Pass     # @github : ahmadchen
# CloudFlare Bypasser # -----------------------
####################### 
"""
def exception_handler(exception_type, exception, traceback):
    print ("%s: %s" % (exception_type.__name__, exception))

sys.excepthook = exception_handler

def check_web(url):	
	r = requests.get("http://" + url + "/")
	newloc = r.history[0].headers['Location']
	if r.history[0].status_code == 302:
		if re.search("mercusuar",newloc):
			return(False)
		elif re.search(url, newloc):
			return(True)
	else:
		return(True)

def get_ip(url):
	return(socket.gethostbyname(url))

def get_prov(ip):
	r = requests.get("http://ipinfo.io/" + ip + "/json")
	x = json.loads(r.text)
	return x['org']

if len(sys.argv) < 2:
	print(banner,"\nUsage : python3 cp.py target.com")
	exit()
else:
	print(banner)
	realip   = get_ip(sys.argv[1])
	realprov = get_prov(realip)
	print(sys.argv[1] + " :: " + realip + " (" + realprov + ")")
	for x in subdomains:
		test = x + "." + sys.argv[1]
		if check_web(test) == True:
			if get_ip(test) == realip:
				continue
			else:
				print("[Found] " + get_ip(test) + " (" + get_prov(get_ip(test)) + ") ")
		else:
			continue
