<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$link = mysqli_connect('localhost', 'root', '', 'yeticave');
mysqli_set_charset($link, "utf8mb4");

if ($link == false) {
    print('Ошибка подключения к бд: ' . mysqli_connect_error());
    exit();
}