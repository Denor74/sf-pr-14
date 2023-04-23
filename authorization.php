<?php

//session_start();
//$patch = $_SERVER['HTTP_HOST'];


// Подключаем JSON с данными пользователей
$usersJSON = file_get_contents('users.json');
$usersArr = json_decode($usersJSON, true);
// Это короткая форма (синтаксический сахар) тернарного оператора с isset()
// если переменной нет или она равна null - то используется значение, указанное после ??
// ПОлучаем данные из формы 
$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
// Проверяем авторизацию
$auth = $_SESSION['auth'] ?? null;
