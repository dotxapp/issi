<?php
$message = $_GET['message'];
$chatid= $_GET['chatid'];
$token= $_GET['makin'];

$url = 'https://api.telegram.org/bot5683961460:AAGjgJj36-5rttL3c23iuWHtjgoGX9tjNyc/sendMessage?chat_id=-833002998&text=hello+world';
  
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$response = json_decode($response);
curl_close($ch);



?>
