#!/usr/bin/env python3
# -*- coding: utf-8 -*-
import hashlib , os , string
from string import *

W  = '\033[0m'  # white (default)
R  = '\033[1;31m' # red
G  = '\033[1;32m' # green bold
O  = '\033[1;33m' # orange
B  = '\033[1;34m' # blue
P  = '\033[1;35m' # purple
C  = '\033[1;36m' # cyan
GR = '\033[1;37m' # gray

ascii_letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'

string_list = ascii_letters

def generateHashFromString(hashMethod, cleartextString):
    if hashMethod == "md5":
        return hashlib.md5(cleartextString.encode()).hexdigest()
    
    elif hashMethod == "sha1":
        return hashlib.sha1(cleartextString.encode()).hexdigest()
    
    elif hashMethod == "sha224":
        return hashlib.sha224(cleartextString.encode()).hexdigest()
    
    elif hashMethod == "sha256":
        return hashlib.sha256(cleartextString.encode()).hexdigest()
    
    elif hashMethod == "sha384":
        return hashlib.sha384(cleartextString.encode()).hexdigest()
    
    elif hashMethod == "sha512":
        return hashlib.sha512(cleartextString.encode()).hexdigest()
    else:
        pass

def reverseString(string):
    return string[::-1]

def IndexErrorCheck(index_input):
    if len(string_list) <= index_input:
        pass
    else:
        return string_list[index_input]

def StringGenerator(string):
    if len(string) <= 0:
        string.append(string_list[0])
    else:
        # error checking needs to be done, otherwise a ValueError will raise
        string[0] = IndexErrorCheck((string_list.index(string[0]) + 1) % len(string_list))
        if string_list.index(string[0]) == 0:
            return [string[0]] + StringGenerator(string[1:])
    return string

def demd5():
    hashMethod = "md5"
    stringToBeCracked = str(input(C+' Input Hash '+R+'> '+W))
    generated_string = []
    
    while True:
        generated_string = StringGenerator(generated_string)
        formatted_string = reverseString("".join(generated_string))
        
        if generateHashFromString(hashMethod, formatted_string)  == stringToBeCracked:
            print(C+" String "+R+">"+W+" {}".format(formatted_string))
            main()

def desha1():
    hashMethod = "sha1"
    stringToBeCracked = str(input(C+' Input Hash '+R+'> '+W))
    generated_string = []
    
    while True:
        generated_string = StringGenerator(generated_string)
        formatted_string = reverseString("".join(generated_string))
        
        if generateHashFromString(hashMethod, formatted_string)  == stringToBeCracked:
            print(C+" String "+R+">"+W+" {}".format(formatted_string))
            main()

def desha224():
    hashMethod = "sha224"
    stringToBeCracked = str(input(C+' Input Hash '+R+'> '+W))
    generated_string = []
    
    while True:
        generated_string = StringGenerator(generated_string)
        formatted_string = reverseString("".join(generated_string))
        
        if generateHashFromString(hashMethod, formatted_string)  == stringToBeCracked:
            print(C+" String "+R+">"+W+" {}".format(formatted_string))
            main()

def desha256():
    hashMethod = "sha256"
    stringToBeCracked = str(input(C+' Input Hash '+R+'> '+W))
    generated_string = []
    
    while True:
        generated_string = StringGenerator(generated_string)
        formatted_string = reverseString("".join(generated_string))
        
        if generateHashFromString(hashMethod, formatted_string)  == stringToBeCracked:
            print(C+" String "+R+">"+W+" {}".format(formatted_string))
            main()

def desha384():
    hashMethod = "sha384"
    stringToBeCracked = str(input(C+' Input Hash '+R+'> '+W))
    generated_string = []
    
    while True:
        generated_string = StringGenerator(generated_string)
        formatted_string = reverseString("".join(generated_string))
        
        if generateHashFromString(hashMethod, formatted_string)  == stringToBeCracked:
            print(C+" String "+R+">"+W+" {}".format(formatted_string))
            main()

def desha512():
    hashMethod = "sha512"
    stringToBeCracked = str(input(C+' Input Hash '+R+'> '+W))
    generated_string = []
    
    while True:
        generated_string = StringGenerator(generated_string)
        formatted_string = reverseString("".join(generated_string))
        
        if generateHashFromString(hashMethod, formatted_string)  == stringToBeCracked:
            print(C+" String "+R+">"+W+" {}".format(formatted_string))
            main()

def banner() :
	os.system('clear')
	print ('')
	print (C+'    .===. (      ')
	print (C+'    |   |  )     ')
	print (C+'    |   | (               '+O+'v.1 ')
	print (C+'    |   | )   '+R+'  ╔╦╗┌─┐┌─┐┬─┐┬ ┬┌─┐┌┬┐┌─┐┬─┐')
	print (C+'    |   \*/   '+R+'   ║║├┤ │  ├┬┘└┬┘├─┘ │ │ │├┬┘')
	print (C+'  ,\'    //.  '+R+'   ═╩╝└─┘└─┘┴└─ ┴ ┴   ┴ └─┘┴└─')
	print (C+' :~~~~~//~~;     ')
	print (C+'  `.  // .\'   '+GR+'  https://github.com/ahmadchen')
	print (C+'  `-------\'     ')
	print ('')

def menu() :
	print ('')
	print (C+' md5'+R+'       :'+W+' Decode MD5')
	print (C+' sha1'+R+'      :'+W+' Decode SHA1')
	print (C+' sha224'+R+'    :'+W+' Decode SHA224')
	print (C+' sha256'+R+'    :'+W+' Decode SHA256')
	print (C+' sha384'+R+'    :'+W+' Decode SHA384')
	print (C+' sha512'+R+'    :'+W+' Decode SHA512')
	print ('')
	print (C+' exit'+R+'      :'+W+' Exit')

def main() :
	print ('')
	cmd = str(input(R+' > '+W))
	if cmd == 'exit' or cmd == '-e' :
		exit()
	elif cmd == 'menu' or cmd == '-m' :
		menu()
		main()
	elif cmd == 'clear' :
		banner()
		main()
	elif cmd == 'quit' or cmd == '-q' :
		print ('')
		print (O+" Command "+cmd+" Not Found")
		print (W+" Type ( "+C+"exit"+W+" ) to Exit Program")
	elif cmd == 'md5' :
		demd5()
	elif cmd == 'sha1' :
		desha1()
	elif cmd == 'sha224' :
		desha224()
	elif cmd == 'sha256' :
		desha256()
	elif cmd == 'sha384' :
		desha384()
	elif cmd == 'sha512' :
		desha512()
	else :
		print ('')
		print (O+" Command "+cmd+" Not Found")
		print (W+" Type ( "+C+"menu"+W+" ) to Show Menu")
		main()

banner()
main()
