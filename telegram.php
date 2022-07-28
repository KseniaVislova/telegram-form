<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['comment'];
$token = "1997452873:AAEDrnfUdoN00VVUXPcjgmCNA3y-1t-J_Kc";
$chat_id ="206799361";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>