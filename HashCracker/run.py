#!/usr/bin/python

import requests, sys, hashlib,bcrypt
from passlib.hash import phpass

def banner():
	print(''' ----------------
|  Hash Cracker  | by Pace Usa Offical
 ----------------''')
def check(hash_id):
	r = requests.get("https://hashes.org/download.php?hashlistId=" + str(hash_id) +"&type=found", headers={'referer':'https://hashes.org'})
	return r.text


if len(sys.argv) < 3:
	banner()
	print("Usage\t: md5.py [hash] [type]\nEx\t: md5.py 21232f297a57a5a743894a0e4a801fc3 md5\nType\t: md5,sha1,sha256,sha384,sha224,sha512,bcrypt,phpass (used by Wordpress/Drupal)")
else:
	my_hash = sys.argv[1]
	hash_type = sys.argv[2]
	banner()
	for id_hash in range(14, 10000):
		try:
			print("[*] Running on ID : " + str(id_hash))
			x = check(id_hash).split("\n")
			for i in x:
				if hash_type == "md5":
					anjay = hashlib.md5(i.encode('utf-8')).hexdigest()
				elif hash_type == "sha1":
					anjay = hashlib.sha1(i.encode('utf-8')).hexdigest()
				elif hash_type == "sha512":
					anjay = hashlib.sha512(i.encode('utf-8')).hexdigest()
				elif hash_type == "sha384":
					anjay = hashlib.sha384(i.encode('utf-8')).hexdigest()
				elif hash_type == "sha256":
					anjay = hashlib.sha256(i.encode('utf-8')).hexdigest()
				elif hash_type == "sha224":
					anjay = hashlib.sha224(i.encode('utf-8')).hexdigest()
				elif hash_type == "bcrypt":
					if bcrypt.checkpw(i.encode('utf-8'), my_hash.encode('utf-8')):
						anjay = my_hash
					else:
						anjay = i
				elif hash_type == "phpass":
					if phpass.verify(i.encode('utf-8'), my_hash.encode('utf-8')):
						anjay = my_hash
					else:
						anjay = i
				if anjay == my_hash:
					print('[Found] '+ hash_type + ':' + my_hash + ' => ' + i)
					z = input("Press any keys to continue | Ctrl + Z to Exit\n")
		except Exception as e:
			print(e)
