<?php

session_start();
$patch = $_SERVER['HTTP_HOST'];
$auth = $_SESSION['auth'] ?? null;
// Подключаем JSON с данными пользователей
$usersJSON = file_get_contents('users.json');
$usersArr = json_decode($usersJSON, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA - салон</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header class="row">
     <div class="col-9">Лучший SPA салон. +79999999999</div>  
     <div class="col-3 avtorisation">
        <a href="/login.php">Авторизоваться на сайте</a>
     <!-- <?php 
     if(!$auth) { ?>

      <form action="upload-14-7.php" method="post">
          <input name="login" type="text" placeholder="Логин">
          <input name="password" type="password" placeholder="Пароль">
          <input name="submit" type="submit" value="Войти">
      </form>


<?php } else {
    echo '<h2>Вы уже авторизованы </h2>';
}

// контент для администратора

?>-->
     </div>
    </header>
    
    <article>
        <h1>Услуги нашего SPA-салона</h1>
        <div class="row justify-content-center mx-auto">
            <div class="col m-3"><div class="usluga"><img src="/img/spa-female.webp" alt="услуги SPA салона"><div class="uslugi-tittle">SPA для женщин</div></div></div>
            <div class="col m-3"><div class="usluga"><img src="/img/spa-male.webp" alt="услуги SPA салона"><div class="uslugi-tittle">SPA для мужчин</div></div></div>
            <div class="col m-3"><div class="usluga"><img src="/img/spa-dvoe.webp" alt="услуги SPA салона"><div class="uslugi-tittle">SPA для двоих</div></div></div>

        </div>
        <h1>Акции</h1>
        <div class="row">
            <div class="mx-auto"><a href="/login.php" class="a_action"><img src="/img/action.jpg" alt="Акция - тайский массаж"><div class="uslugi-action">Авторизуйся и получи тайский массаж на двоих в подарок!!!</div></a></div>
        </div>
    </article>
    <div>
    <?php
echo '<pre>';
    $data = date("d.m");
    echo $data . '<br>';
    var_dump($data);
    echo '$usersJSON: ' . '<br>';
    var_dump($usersJSON);
    echo 'DIR' . '<br>';
    echo '$usersArr: ' . '<br>';
    var_dump($usersArr);
    echo '$usersArr name: ' . $usersArr[0]['login'] . '<br>';
// echo __DIR__;
// echo 'patch' . PHP_EOL;
echo $patch;
echo '</pre>';
    ?>

    </div>
</body>
</html>