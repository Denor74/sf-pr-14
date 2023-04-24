<?php
include "load.php";
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
      crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header class="row">
     <div class="col-7">Лучший SPA салон. +79999999999</div>
     <?php
     if($auth) {
        echo '<div class="col-2">Вы вошли как: ' . $_SESSION['login'] . '</div>';
     }
     ?>
     <div class="col-3 avtorisation">
        <a href="/login.php">Авторизоваться на сайте</a>
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


    </div>
</body>
</html>