<?php
$message = $_GET['message'];
$chatid= $_GET['chatid'];
$token= $_GET['makin'];

$addr_details = unserialize(file_get_contents(
'https://api.telegram.org/bot'.$token'/sendMessage?chat_id='.$$chatid'&text='.$message));


?>
