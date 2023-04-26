<?php
// admin pass 123 // user pass 111
// Подключаем JSON с данными пользователей
$usersJSON = file_get_contents('users.json');
$usersArr = json_decode($usersJSON, true);

//echo $usersArr[0]['pass'];

//$numUsersArr = count($usersArr);
// ?? Это короткая форма (синтаксический сахар) тернарного оператора с isset()
// если переменной нет или она равна null - то используется значение, указанное после ??
// ПОлучаем данные из формы 
// --------------------------------------------
$username = $_POST['login'] ?? null;
$password = md5($_POST['password']) ?? null;
// admin pass 123 // user pass 111;

// вводим переменную для прроверки логина и пароля
$hasLoginPass = false;
// ПРоверяем на наличие данных переданных из POST
if (null !== $username || null !== $password) {
    // сверяем наличие имени в данных массиве с пользователями
    foreach ($usersArr as $key => $value) {
        if ($value["login"] == $username and $value["pass"] == $password) {
            $hasLoginPass = true;
            //echo 'Есть слвпадение';
            //Стартуем сессию
            session_start();
            //Пишем в сессию, что мы авторизовались
            $_SESSION['auth'] = true;
            //Пишем в сессию догин пользователя
            $_SESSION['login'] = $username;
            //Записываем время входа на сайт
            $_SESSION['timeLogin'] = time();
        }
    }
}



$auth = $_SESSION['auth'] ?? null;


if ($auth == null) {
    // Пишем в сессию, Ошибка авторизации
    $_SESSION['authErr'] = true;
    $login_url = '/login.php';
    header('Location: ' . $login_url);
}
// Проверяем авторизацию
if ($auth) {
    sleep(1);
    $new_url = '/index.php';
    header('Location: ' . $new_url);
    die();
} 

// echo '$_SESSION ' . PHP_EOL;
// var_dump($_SESSION);
