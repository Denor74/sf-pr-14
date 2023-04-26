<?php
//=====================================================================================
//    Файлы и данные подгружаемые на страницы сайта
//=====================================================================================

session_start();

$patch = $_SERVER['HTTP_HOST'];
$auth = $_SESSION['auth'] ?? null;

$authErr = $_SESSION['authErr'] ?? null;
$bdAction = $_SESSION['bdSession'] ?? null;
//var_dump($bdAction);

// Переменная для проверки правильности авторизации
//$authErr = $_SESSION['authErr']; 

include "sessionend.php";
include "time.php";

// echo md5('123') . PHP_EOL;

// echo md5('111');
