<?php
   //php 7.3.0

   echo "E-Mail Semantara\n";
   echo "Silahkan Buat Akun Terlebih Dahulu\n";
   echo "Username :";
   $user = trim(fgets(STDIN));
   echo "Password :";
   $pass = trim(fgets(STDIN));
   echo "[+] Username Berhasil Dibuat\n";
   sleep(2);
function main($user, $pass){
       echo "==================================================================\n";
       echo "                  AUTHOR     :     CoDeX01               \n";
       echo "                     [!] SISTEM IS NOT SAFE [!]\n";
       echo "==================================================================\n";
       echo "\n";
       echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
       echo "                         Username :".$user."@CoDeX01.net\n";
       echo "                         Password :".$pass."\n";
       echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

}
main($user, $pass);


$no = 0;
while (true){
     $no++;
     echo "Tunggu Sampai Selesai | ";
     echo "LOADING ....".$no."%\n";
     sleep(1);
     if ( $no == 10 ){
     break;
     }
}

?>
