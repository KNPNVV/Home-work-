<?php
if (isset($_POST['comment'])) {
    $from = 'email';
    $text = $_POST['comment'];
    mail($from, "Отзыв", $text);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content" align="center">
    <form action="comment.php" method="post">
        <textarea name="comment" cols="30" rows="10"></textarea><br>
        <button type="submit" name="go">Отправить</button>
    </form>
</div>
</body>
</html>