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
echo "
=====================
IP-TRACKER  [ V.1.0 ]
=====================
"
main(){
      url=http://ip-api.com/
      echo $red"===================================="
      echo $white
      read -p "Masukkan IP Target : " ip;
      echo
      echo $blue"===================================="
      curl -s $url$ip
      echo $red"========================================"
      echo $white"Trimakasih Telah Menggunakan Tools Ini"
      echo $blue"========================================"
      echo
      echo $red'=========================================
CATATAN : HARAP GUNAKAN TOOLS INI
UNTUK KEPERLUAN YANG MENDESAK,
JANGAN GUNAKAN TOOLS INI UNTUK
TINDAK KEJAHATAN.'
echo $white"[SALAM HORMAT]" $purple"|" $green"TEAM THEX-GHOST"
echo $white"[SALAM HORMAT]" $cyan"|" $yellow"AUTHOR CoDeX01"
echo $red"========================================="
}
 main
