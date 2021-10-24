<?php
session_start();
if (count($_POST) > 0) {
$login = md5(trim($_POST['login']));
$password = md5(trim($_POST['password']));
    $login_true = md5('admin');
    $password_true = '202cb962ac59075b964b07152d234b70';
    if ($login == $login_true & $password == $password_true)
    {
        header('Location: comment.php');
        exit();
    }
    else {
       echo "Ошибка!";
    }
}
//session_destroy() удаление всех файлов сессии
// session_unset() удаляет сессию по ключу

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.form.css">
    <title>Авторизация</title>
</head>
<body>
<div class="content"  align="center">
    <form action="login.php" method="post" class="aut">
        <p>АВТОРИЗАЦИЯ</p>
        <input type="text" name="login" placeholder="Login"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <button type="submit" name="singin">Войти</button>
    </form>
    <button class="back">
        <a href="https://fact.digital/">Fact</a>
    </button>
    <button class="back">
        <a href="../index.php">НАЗАД</a>
    </button>
    <button class="back">
        <a href="https://www.bitrix24.ru/">Bitrix</a>
    </button>
</div>
</body>
</html>
