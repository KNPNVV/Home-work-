<?php
if (count($_POST) > 0) {
    $theme =  $_POST['theme'];
        if ($theme == "Серый") {
            echo '<link rel="stylesheet" type="text/css" href="CSS/style.css">';
        } else {
        echo '<link rel="stylesheet" type="text/css" href="CSS/darkstyle.css">';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Кирюхин Кирилл</title>
</head>
<header class="header">
    <div class="header_logo">
        <a class="logo" href="../index.php"><img src="../images/logo.jpeg" alt="#"></a>
    </div>
    <nav class="header_nav">
        <a href="#">$$$$$$$</a>
        <a href="views/mass.php">Массивы</a>
        <a href="views/table.php">Таблица Димаса</a>
    </nav>
    <div class="color">
        <form action="#" method="post" class="color_form">
            <select name="theme">
                <option value="lite">Серый</option>
                <option value="dark">Черный</option>
            </select>
            <input class ="click" type="submit">
        </form>
    </div>
    <div class="singup">
        <a class="login" href="views/login.php">Авторизация</a><br>
        <a class="login" href="views/singup.php">Регистрация</a>
    </div>
</header>
