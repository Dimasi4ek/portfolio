<?php

/* https://api.telegram.org/bot5347896717:AAFZzqTOh8Ik3mQLWSpsZ5FBC2edybqfmtc/getUpdates,
где, 5347896717:AAFZzqTOh8Ik3mQLWSpsZ5FBC2edybqfmtc - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$token = "5347896717:AAFZzqTOh8Ik3mQLWSpsZ5FBC2edybqfmtc";
$chat_id = "-695016213";

$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => "$phone"
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
