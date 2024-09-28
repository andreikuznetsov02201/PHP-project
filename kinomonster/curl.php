<?php 




$url = "https://yandex.ru";

$userAgent = "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31";

$ch = curl_init($url);

$options = array(
    CURLOPT_CONNECTTIMEOUT => 20 , 
    CURLOPT_USERAGENT => $userAgent,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true
);

curl_setopt_array($ch, $options);
$cl = curl_exec($ch);
curl_close($ch);
echo $cl;


//https://www.php.net/manual/ru/function.curl-setopt.php
?>
