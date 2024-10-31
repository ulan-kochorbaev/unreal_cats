<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>

</head>
<body>
<?php 
    session_start();
    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {

?>
<div class="auth_block">
    <img src="logoo.png" alt="" class = "regpic">
    <div class="link_register">
        <a href="register.php">Регистрация</a>
    </div>
    <div class="link_auth">
        <a href="avtor.php">Авторизация</a>
    </div>
</div>
<?php 
    }
    else {
?>
    <div>
        <div id="exit_block">
            <div id="link_remark">
                <a href="Glavnaya.php">Главный сайт</a>
            </div>
        <div id="link_exit">
            <a href="exit.php">Выход</a>
        </div>
    </div>
<?php 

    }
?>
</body>
</html>