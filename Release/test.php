<?php
$app_name   = $_POST[“app”];
$sender     = $_POST[“sender”];
$message    = $_POST[“message”];
$response = array("reply" => "Hello $sender, we received your message $message.");
echo json_encode($response);
?>
