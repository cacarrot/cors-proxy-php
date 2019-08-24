<?php
header('Access-Control-Allow-Origin:*');
header("Content-Type: text/plain; charset=UTF-8");

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    echo $_SERVER['REMOTE_ADDR'];
}
