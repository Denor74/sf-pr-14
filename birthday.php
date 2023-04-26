<?php
session_start();
// $birthdayForm = '26.04.1994';
// Получаем данные из формы 
$birthdayForm = $_POST['birthdayUser'] ?? null;

echo '$birthdayForm ' . $birthdayForm;
echo PHP_EOL;

if ($birthdayForm == '') {
    //Стартуем сессию
    
    $_SESSION['bdSession'] = 1;
    $bdAction = $_SESSION['bdSession'];
     $new_url = '/index.php';
     header('Location: ' . $new_url);
     die();
}
// echo '$bdAction ' . $bdAction;
// var_dump($_SESSION['bdSession']);

//создаем массив с данными о дне рождения
$bdArr = explode('.', $birthdayForm);
var_dump($bdArr);
// проверяем правильность заполнения даты рождения
$bdCheck = checkdate($bdArr[1], $bdArr[0], $bdArr[2]);
var_dump($bdCheck);
if($bdCheck) {
     //прописываем в сессию, что дата др введена
     $_SESSION['bdSession'] = true;

var_dump($_SESSION['bdSession']);
     //получаем сегодняшнюю дату
     $dateToday = (int)date('dm');
     var_dump($dateToday);
     //формируем строку с датой др пользователя
     $userToday = "$bdArr[0]$bdArr[1]";
     $userToday = (int)$userToday;
     var_dump($userToday);
    //  echo $userToday . PHP_EOL;
    // echo $dateToday . PHP_EOL;
     if ($dateToday == $userToday) {
         $_SESSION['bdSession'] = true;
        //   $bdAction = 'Код "BIRTHDAY" для получения 5% скидки';
        //   echo $bdAction;
        //  echo $bdAction;
     }

 } else {
 //прописываем в сессию, что дата др введена
     $_SESSION['bdSession'] = false;
     // $bdActionNo = "Вы ввели не правильную дату";
     // echo $bdActionNo;
 }

$bdAction = $_SESSION['bdSession'] ?? null;

// var_dump($_SESSION['bdSession']);
  $new_url = '/index.php';
  header('Location: ' . $new_url);



?>