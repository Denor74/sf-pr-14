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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="row">
        <div class="col-7 text-success logo"><span>Лучший SPA салон</span> +79999999999</div>
        <?php
        if ($auth) {
            echo '<div class="col-2 user"><span>Вы вошли как: </span>' . $_SESSION['login'] . '</div>';
        }
        ?>
        <div class="col-3 avtorisation">
            <?php if (!$auth) { ?><a href="/login.php">Авторизоваться на сайте</a>
            <?php } else { ?><a href="/index.php?endSession=true">Выйти из личного кабинета</a> <?php } ?>

        </div>
    </header>

    <article>
        <h1>Услуги нашего SPA-салона</h1>
        <div class="container">
        
        <div class="row justify-content-between">
            <div class="col-sm-4">
                <div class="usluga"><img src="/img/spa-female.webp" alt="услуги SPA салона">
                    <div class="uslugi-tittle">SPA для женщин</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="usluga"><img src="/img/spa-male.webp" alt="услуги SPA салона">
                    <div class="uslugi-tittle">SPA для мужчин</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="usluga"><img src="/img/spa-dvoe.webp" alt="услуги SPA салона">
                    <div class="uslugi-tittle">SPA для двоих</div>
                </div>
            </div>
        </div>
        </div>
        <h1>Акции</h1>
        <div class="container">
            <div class="d-flex p-2">

                <div class="flex-fill"><div><a href="/login.php" class="a_action"><img src="/img/action.jpg" alt="Акция - тайский массаж">
                        <?php if (!$auth) { ?><div class="uslugi-action">Авторизуйся и получи тайский массаж на двоих в подарок!!!</div>
                        <?php } else { ?><div class="action-time">Успейте забрать подарок!!!<br>осталось<br><?= timeAction(); ?></div><?php } ?>
                    </a></div></div>
            </div>


            <
            <div class="flex-fill p-2">
                <div class="div-birthday">
                    <div>Акция для именниника</div>
                    <div class="form-day"><form action="/birthday.php" method="post" class="form-group">
                        <div class="form-group">
                            <label for="text">Введите дату рождения</label>
                            <input name="birthdayUser" type="text" placeholder="дд.мм.гггг" class="form-control">
                        </div>
                        <input name="submit" type="submit" value="Отправить" class="btn btn-secondary">

                    </form>
                    </div>
                </div>
            </div>
             


        </div>

        </div>


    </article>
    <div>


    </div>
</body>

</html>