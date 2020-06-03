<?php
system('clear');
function main($url){
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
echo " 
====================================================
     AUTHOR      :       CoDeX01
     
     SCRIPT      :       DOWNLOAD VIDIO FB
     
     TOOLS       :       FACEBOOK VIDEO DOWNLOADER
     
     # WARNING [ ! ]
         # JANGAN GUNAKAN TOOLS INI                                 
           UNTUK KEJAHATAN ! ! !                                              
         - CONTOH : NYAKITIN PACAR WKWK:V                      
=====================================================
";

echo "\n";
echo " [ MASUKKAN URL ] FROM :";
$from = trim(fgets(STDIN, 1024));
echo "\n";
echo "BERINAMA :";
$save = trim(fgets(STDIN, 1024));
$url = str_replace ('www', 'mbasic', $from);
$s = main($url);
$vurl = preg_match('/<a href=\"\/video_redirect\/\?src\=(.*?)\"/ims', $s, $matches) ? $matches[1] : null;
$vu = urldecode($vurl);
echo "\n\n[+]DOWNLOADING...\n\n";
$d = 'wget -O "' . $save . '.mp4" --user-agent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6" "' . $vu . '" -q --show-progress';
system($d);
echo "\n\n[+] Done.. Saved As : " . $save . ".mp4\n";
exit(0);


?>
