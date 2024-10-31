<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="reg">
    <h2>Авторизация</h2>
    <form action="test_user.php" method=post>
        <p>
            <label>Ваш логин:<br></label>
            <input type="text" name="login" size="15" maxlength="15">
        </p>
        <p>
        <label >Ваш пароль:<br></label>
        <input type="password" name="pass" size="15" maxlength="15">
        </p>
        <p>
            <input type="submit" name="submit" value="Войти" class="btn_reg">
        </p>
    </form>
    </div>
</body>
</html>