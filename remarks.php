<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    session_start();
    if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <p>Зарегайся</p>
<?php 
    }
    else {
?>
    <div class="sidenav">
        <div class="ulan">
        <img src="logoo.png" alt="" class = "fot">
        <a href="Glavnaya.php">Главная</a>
        <a href="Svayaz.php">Связь</a>
        <a href="Koty.php">Коты</a>
        <a href="remarks.php">Оставить отзыв</a>
        <a href="contacts.php">Посмотреть отзывы</a>
        <a href="exit.php">Выход</a>
        </div>
    </div>
    <div class="nazvanie">
        <h1>Нереальные коты</h1>
    </div>
    <div class="form_otziv">
        <h1>Оставьте отзыв</h1>
        <form action="save_remarks.php" method="post">
        <p>
            <label>Тема сообщения<br></label>
            <textarea name="tema" cols="50" rows="10"></textarea>
        </p>
        <p>
            <label>Введите текст сообщения:<br></label>
            <textarea name="text" cols="50" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Сохранить">
            
        </p>
        </form>
    </div>
    <?php 
    }
?>
</body>
</html>