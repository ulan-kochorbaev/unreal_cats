<?php 
session_start( );
if (isset($_POST['tema'])) {
    $tema=$_POST['tema'];
    if ($tema =='') {
        unset($tema);
    }
}
if (isset($_POST['text'])) {
    $text=$_POST['text'];
    if ($text =='') {
        unset($text);
    }
}
if (empty($tema) or empty($text)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
else {
    include("dbconnection.php");
    if(!empty($_SESSION['id'])) {
        $kod = $_SESSION['id'];
        $result = $mysqli -> query("INSERT INTO Remarks (ID_users, tema, text) VALUES ('$kod', '$tema', '$text')");
        if ($result == 'TRUE') {
            header('Location:'."Glavnaya.php");
        }
        else {
            echo "Ошибка! Сообщение не сохранено";
        }
    }
}
?>