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
        <h2>Мемные коты</h2>
    </div>
    <div class="cats">
        <table class="tbl">
            <tr>
                <td><img class=tbpic src="logoo.png" alt=""></td>
                <td>
                    <div class="yach1">
                    <ul>
                        <li>Он крутой</li>
                        <li>Он высовывает язык</li>
                        <li>Он серо белый</li>
                    </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td><img class=tbpic src="pic1.png" alt=""></td>
                <td>
                    <div class="yach1">
                        <ul>
                            <li>Он сонный</li>
                            <li>Он чрезмерно удивлен</li>
                            <li>Он черно белый</li>
                        </ul>
                        </div>
                </td>
            </tr>
            <tr>
                <td><img class=tbpic src="pic2.png" alt=""></td>
                <td>
                    <div class="yach1">
                        <ul>
                            <li>Он кричит ААААААА</li>
                            <li>Он держится за голову</li>
                            <li>Он серый</li>
                        </ul>
                        </div>
                </td>
            </tr>
            <tr>
                <td><img class=tbpic src="pic3.png" alt=""></td>
                <td>
                    <div class="yach1">
                        <ul>
                            <li>Он смотрит с высока </li>
                            <li>Он ест только свежий корм</li>
                            <li>Он похож на Никиту Русановского</li>
                        </ul>
                        </div>
                </td>
            </tr>
            <tr>
                <td><img class=tbpic src="pic4.png" alt=""></td>
                <td>
                    <div class="yach1">
                        <ul>
                            <li>Он милый </li>
                            <li>Он популярный, делают из него разных персонажей</li>
                            <li>Он рыженький</li>
                        </ul>
                        </div>
                </td>
            </tr>
            <tr>
                <td><img class=tbpic src="haze.png" alt=""></td>
                <td>
                    <div class="yach1">
                        <ul>
                            <li>Его зовут Haze</li>
                            <li>Он кайфует</li>
                            <li>Он серо-белый</li>
                        </ul>
                        </div>
                </td>
            </tr>
        </table>
    </div>
    <?php 
    }
?>
</body>
</html>