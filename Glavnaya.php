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
    <p>Зарегистрируйтесь</p>
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
    <div class="nazvanie"><h1>Нереальные коты</h1></div>
    
    <img src="Монтажная область 1.png" alt="" class="fotka">
    <div class="lor">
    <p class="kor">Коты имеют невероятный потенциал, они известны по всему миру. Только дурак не любит мемы с котами</p>
    </div>

<?php 
    }
?>
   
</body>
</html>