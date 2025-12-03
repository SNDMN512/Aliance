<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);


$token = "7906137324:AAHaFLK8egPyjihi5n9AHefT5fXXKYZbkz0";
$chat_id = "-5093666202";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

$text = "";
foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text= {$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}