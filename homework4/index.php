<?php
$theme = date('G');
if ($theme > 8 && $theme <= 20) {
    $style ="CSS/style.css";
}
else {
    $style ="CSS/darkstyle.css";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <title>Кирюхин Кирилл</title>
</head>
<body>
<div class="container">
    <header class="header">
        <div class="header_logo">
            <img src="images/logo.jpeg" alt="#">
        </div>
        <nav class="header_nav">
            <a href="#">$$$$$$$</a>
            <a href="#">$$$$$$$</a>
            <a href="table.html">Таблица Димаса</a>
        </nav>
    </header>
    <main>
        <div class="portfolio">
            <div class="main_foto">
                <img class="img" src="images/foto.png" alt="Кирилл">
            </div>
            <div class="main_content">
                <div class="main_name">
                    <h1>Кирилл Кирюхин</h1>
                </div>
                <div class="text">
                    <div class="main_summary">
                        <ul>
                            <li>О себе:</li>
                            <li>Холост</li>
                            <li>Работаю в энергетической отрасли</li>
                            <li>Хобби сноубординг/нструктор по сноуборду</li>
                            <li>Изучал: HTML, CSS.</li>
                        </ul>
                    </div>
                    <div class="main_review">
                        <p>
                            Темп занятия комфортный,<br>все понятно и доходчиво.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cinema_flex">
            <div class="godfather">
                <img class="cinema" src="images/The_GodFather.jpg" alt="#">
                <h2>THE GODFATHER</h2>
            </div>
            <div class="deadproof">
                <img class="cinema" src="images/Death_proof.jpg" alt="#">
                <h2>DEATH PROOF</h2>
            </div>
            <div class="pulmfiction">
                <img class="cinema" src="images/Pulp_fiction.jpg" alt="#">
                <h2>PULM FICTION</h2>
            </div>
            <div class="deadman">
                <img class="cinema" src="images/Dead_man.jpg" alt="#">
                <h2>DEAD MAN</h2>
            </div>
        </div>
        <div class="cinema_grid">
            <div class="godfather_1">
                <img class="cinema_1" src="images/The_GodFather.jpg" alt="#">
                <h2>THE GODFATHER</h2>
            </div>
            <div class="deadproof_1">
                <img class="cinema_2" src="images/Death_proof.jpg" alt="#">
                <h2>DEATH PROOF</h2>
            </div>
            <div class="pulmfiction_1">
                <img class="cinema_3" src="images/Pulp_fiction.jpg" alt="#">
                <h2>PULM FICTION</h2>
            </div>
            <div class="deadman_1">
                <img class="cinema_4" src="images/Dead_man.jpg" alt="#">
                <h2>DEAD MAN</h2>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>