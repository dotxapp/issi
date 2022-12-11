<?php
$message = $_GET['message'];
$chatid= $_GET['chatid'];
$token= $_GET['makin'];

$addr_details = unserialize(file_get_contents(
'https://api.telegram.org/bot5683961460:AAGjgJj36-5rttL3c23iuWHtjgoGX9tjNyc/sendMessage?chat_id=-833002998&text=hello+world));


?>
