<?php 
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($name == '' ) {
        unset($name);
    }
}
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '' ) {
        unset($login);
    }
}
if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
    if ($pass == '') {
        unset($pass);
    }
}
if (empty($login) or empty($pass))
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");

}
include ("dbconnection.php");
$result = $mysqli->query("SELECT ID FROM users WHERE Login = '$login' ");
$myrow = $result->fetch_assoc();
if (!empty($myrow['ID'])) {
    exit("Введенный логин уже зарегистрирован. Введите другой логин.");

}
$result2 = $mysqli->query ("INSERT INTO users (Name, Login, Pass) VALUES('$name','$login','$pass')");
if ($result2=='TRUE') {
    header('Location:'."index.php");
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>