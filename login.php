<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA - салон</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="row ">
        <div class="col-9">Лучший SPA салон. +79999999999</div>
        <div class="col-3 avtorisation">
            <a href="index.php">Перейти на главную</a>
            <!-- -->
        </div>
    </header>

    <article>
        <div class="flex-container">
            <div class="row-cont">
                <div class="flex-item">
                    <?php
                    // если пользователь не авторизован выводим форму авторизации
                    if (!$auth) { ?>

                        <form action="/authorization.php" method="post" class="form-group">
                            <div class="form-group">
                                <label for="text">Введите login</label>
                                <input name="login" type="text" placeholder="Логин" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Введите пароль</label>
                                <input name="password" type="password" placeholder="Пароль" class="form-control">
                            </div>
                            <input name="submit" type="submit" value="Войти" class="btn btn-secondary">

                        </form>


                    <?php } else {
                        echo '<h2>Вы уже авторизованы </h2>';
                    }

                    // контент для администратора

                    ?>
                </div>
            </div>
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
        var_dump($auth);
        echo '$auth: ' . $auth . '<br>';
        // echo __DIR__;
        // echo 'patch' . PHP_EOL;
        echo $patch;
        echo '</pre>';
        ?>

    </div>
</body>

</html>