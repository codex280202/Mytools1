#!/bin/bash
clear
blue='\033[34;1m'
green='\033[32;1m'
purple='\033[35;1m'
cyan='\033[36;1m'
red='\033[31;1m'
white='\033[37;1m'
yellow='\033[33;1m'
NOW=`date "+%d.%m.%Y"`
TIME=`date "+%H:%M"`
sleep 1
echo $green"=============================================="
echo $red  "          AUTHOR" $green"|" $red"CoDeX01          "
echo $yellow"           Team [" $green"THEX-GHOST" $yellow"] Team                  "
echo                                  $NOW
echo                                  $TIME
echo $green"=============================================="
echo
echo $cyan"Silahkan Pilih :"
echo $green
echo "1. Buat Akun Sementara"
echo "2. Masuk Sebagai Anonym"
read -p  "> : " b;
if [ $b = 1 ]
then
clear
toilet -f mono12 -F gay Add
toilet -f mono12 -F gay User
echo $green
php login.php
clear
sleep 2
echo $green"=============================================="
echo $red  "          AUTHOR" $green"|" $red"CoDeX01          "
echo $yellow"           Team [" $green"THEX-GHOST" $yellow"] Team                  "
echo $green"==========="
echo         $NOW
echo $green"==========="
echo $green"=============================================="
echo
echo "Silahkan Pilih:"
echo "1)BomSms"
echo "2)WhatsEx"
echo "3)Stabilkan Jaringan"
read -p "Pilih : " bom;
if [ $bom = 1 ]
then
clear
toilet -f mono12 -F gay BooM
toilet -f mono12 -F gay SmS
echo $red
php bom.php
exit
fi

if [ $bom = 2 ]
then
echo "Menginstall . . ."
sleep 2
git clone https://github.com/Pansquarepants/WhatsExploit
cd WhatsExploit
sh whats.sh
exit
fi

if [ $bom = 3 ]
then
echo "Menginstall . . ."
sleep 2
git clone https://github.com/Pansquarepants/Stabilkanjaringan
cd Stabilkanjaringan
sh tes.sh
exit
fi
exit
fi

if [ $b = 2 ]
then
clear
echo "Silahkan Minta Kepada Author / Membuat Akun Sementara"
echo "Login Sc Nya Dulu Bosquh !!!"
fi

read -p "Username : " bro;
read -p "Password : " bre;

if [ $bro = Pans ] || [ $bro = Support ]
then
echo
else
echo "ID/Password Salah !!!"
exit
fi

if [ $bre = Squarepants ] || [ $bre = Me ]
then
echo "Selamat Anda Berhasil Login"
sleep 2
clear
else
echo "ID/Password Salah !!!"
exit
fi

echo $green"=============================================="
echo $red  "          AUTHOR" $green"|" $red"CoDeX01          "
echo $yellow"           Team [" $green"THEX-GHOST" $yellow"] Team                  "
echo                                  $NOW
echo                                  $TIME
echo $green"=============================================="
echo
echo "Silahkan Pilih Option Berikut :"
echo "1.Lacak IP"
echo "2.Download Vidio Fb"
echo "3.Spam SmS 3"
echo "4.Brute Fb"
read -p "Masukkan Option : " o;
if [ $o = 1 ]
then
sh ip-tracker.sh
exit
fi

if [ $o = 2 ]
then
echo $green
php dvfb.php
exit
fi

if [ $o = 3 ]
then
echo $green
php sms.php
exit
fi

if [ $o = 4 ]
then
echo $green
python2 BruteFb.py
exit
fi
