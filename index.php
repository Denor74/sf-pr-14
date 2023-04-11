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
      rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
     <div>Лучший SPA салон </div>  
     <div class="avtorisation">
     <?php 
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

?>
     </div>
    </header>
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