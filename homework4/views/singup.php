<?php
$data = $_POST;

//if (isset($data['signup'])) {
//    $error = array();
//    if (trim($data['firstname']) == '') {
//        $eror[] = 'Укажите Имя!';
//    }
//    if (trim($data['lastname']) == '') {
//        $eror[] = 'Укажите Фамилию!';
//    }
//    if (trim($data['email']) == '') {
//        $eror[] = 'Укажите Email!';
//    }
//    if (trim($data['password']) == '') {
//        $eror[] = 'Укажите Парль!';
//    }
//    if (trim($data['password']) != trim($data['password_2'])) {
//        $eror[] = 'Не верный пароль';
//    }
//}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/style.form.css">
    <title>Регистрация</title>
</head>
<body>
<div class="content" align="center">
    <form action="singup.php" method="post" class="reg">
        <p>РЕГИСТРАЦИЯ</p>
        <input type="text" name="firstname" placeholder="Имя"><br>
        <input type="text" name="lastname" placeholder="Фамилия"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="password" name="password_2" placeholder="Подтвердить пароль"><br>
        <button type="submit" name="signup">Регистрация</button>
    </form>
    <button class="back">
        <a href="../index.php">НАЗАД</a>
    </button>
</div>
</body>
</html>