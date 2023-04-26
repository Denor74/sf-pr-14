<?php

//=====================================================================================
//    Обратный отсчет нахождения на сайте до истечения акции за авторизацию
//=====================================================================================

// // Узнаем текущее время
// $timeLoad = time();
// //Узнаем время нахождения на сайте
// $timeMuch =  $timeLoad - $_SESSION['timeLogin'];

function timeAction() {
    // Узнаем текущее время
$timeLoad = time();
//Узнаем время нахождения на сайте
$timeMuch =  $timeLoad - $_SESSION['timeLogin'];
//   echo $timeMuch . '<br>';
// До конца акции осталось 

$timeAction = 86400 - $timeMuch;

// echo $timeAction;

if ($timeAction > 0) {
     $resTime = array();
	
	 $resTime['days'] = floor($timeAction / 86400);
	 $timeAction = $timeAction % 86400;
	
	 $resTime['hours'] = floor($timeAction / 3600);
	 $timeAction = $timeAction % 3600;
 
	 $resTime['minutes'] = floor($timeAction / 60);
	 $resTime['sec'] = $timeAction % 60;
 
	 return $resTimeOut = $resTime['hours'] . ' час ' . $resTime['minutes'] . ' мин ' . $resTime['sec'] . ' сек ';
} else {
    return $resTimeOut = "Время Вашей акции истекло";
}
}
