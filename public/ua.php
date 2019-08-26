<?php
require_once('./utils/Slack.php');

header('Access-Control-Allow-Origin:*');
header("Content-Type: application/json; charset=UTF-8");

$REQUEST_URL = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$UA = $_SERVER['HTTP_USER_AGENT'];

Slack::post([
    'username' => $REQUEST_URL,
    'text' => $UA,
]);

echo $UA;
