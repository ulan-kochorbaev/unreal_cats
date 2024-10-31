<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<title>Регистрация</title>
</head>
<body>
    <div class = "reg">
    <h2>Регистрация</h2>
<!-- Начало формы регистрации. save_user.php - это адрес обработчика, то есть после нажатия на кнопку "Зарегистрироваться" данные из полей будут переданы файлу save_user.php методом "post" -->
     <form action = "save_user.php" method = "post">
<!-- В текстовое поле с именем пате пользователь вводит свое
имя -->
    <p> 
        <label>Ваше имя:<br></label>
    <input name = "name" type = "text" size = "15" maxlength ="15">
    </p>
<!-- В текстовое поле с именем Login пользователь вводит
свой логин -->
    <p>
        <label>Ваш логин: <br></label>
        <input name = "login" type = "text" size = "15" maxlength = "15">
    </p>
<!-- В поле для паролей с именем pass пользователь вводит
свой пароль -->
    <p> 
        <label>Ваш пароль: <br></label> 
        <input name = "pass" type = "password" size = "15" maxlength = "15">
    </p>
<!-- Кнопкой (type = "submit") пользователь сможет отправить данные на обработку файлу save_user.php -->
    <p>
    <input type = "submit" name = "submit" value = "Зарегистрироваться" class="btn_reg">
    </p>
    </form>
</div>
</body>
</html> 