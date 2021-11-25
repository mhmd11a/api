<?php
$path = "https://api.telegram.org/bot1907584020:AAG7pEFE-pzkta6R6fh3VQY4cCsYA0_30wM;

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if (strpos($message, "/weather") === 0) {
}
file_get_contents("https://api.telegram.org/bot1907584020:AAG7pEFE-pzkta6R6fh3VQY4cCsYA0_30wM/sendMessage?chat_id=904893551&text=gg");

?>
