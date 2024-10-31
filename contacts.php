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
        <h2>Отзовы</h2>
    </div>
    <div class="otzivy_posm">
        <?php
// Подключаем базу данных
include("dbconnection.php");
// Получаем все строки, которые есть в таблице remarks 
$result = $mysqli->query("SELECT * FROM Remarks"); // Начинаем строить таблицу, присваиваем ей имя $table 
$table = "<table>"; // Начинаем вести счетчик отзывов (строк в таблице)
$k = 1;
// Начинаем цикл, позволяющий вывести все отзывы из таблицы remarks
while ($myrow = $result->fetch_assoc()){
$table .= "<tr>";
$table .= "<td>".$myrow['tema']."</td>";
$table .= "<td>".$myrow['text']."</td>"; 
$table .= "</tr>";
$k++;
}
// Закрываем таблицу 
$table .= "</table>"; // Выводим сформированную таблицу
echo $table;
?>
    </div>
    <?php 
    }
?>
</body>
</html>