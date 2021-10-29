<?php
//$theme = date('G');
//if ($theme > 8 && $theme <= 20) {
//    $style = "CSS/style.css";
//} else {
//    $style = "CSS/darkstyle.css";
//}
function page_style() {
    $theme = date('G');
    if ($theme > 8 && $theme <= 20) {
        echo '<link rel="stylesheet" type="text/css" href="CSS/style.css">';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="CSS/darkstyle.css">';
    }
}
page_style();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Кирюхин Кирилл</title>
</head>
<body>
<div class="container">
<?include 'header.php' ?>
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
                        <p class="ul">
                            <?
                            $str = "О себе <br>Холост <br>Работаю в энергетической отрасли<br>Хобби сноубординг нструктор по сноуборду<br>Изучал  HTML  CSS.";
                            function second_phrase ($str) {
                                $str1 = explode(" ", $str);
                                $str1[0] = "<span style='color: #ea4d33'>$str1[0]</span>";
                                $str1[1] = "<span style='color: #ea4d33'>$str1[1]</span>";
                                $str2 = implode(" ", $str1);
                                echo $str2;
                            }
                            second_phrase($str);
//                            $str1 = explode(" ", $str);
//                            $str1[0] = "<span style='color: #ea4d33'>$str1[0]</span>";
//                            $str1[1] = "<span style='color: #ea4d33'>$str1[1]</span>";
//                            $str2 = implode(" ", $str1);
//                            echo $str2;
                            ?>
                        </p>
                    </div>
                    <div class="main_review">
                        <p>
                            <?
                            $str3 = "Темп занятия комфортный,<br>все понятно и доходчиво.";
                            function color_word ($str3) {
                                $str4 = explode(" ", $str3);
                                foreach ($str4 as $str5 => $str6) {
                                    if ($str5 % 2 == 0) {
                                        $str4[$str5] = "<span style='color: #ea4d33'>$str6</span>";
                                    } else  $str4[$str5] = "<span style='color: purple'>$str6</span>";
                                }
                                $str7 = implode(" ", $str4);
                                echo $str7;
                            }
                            color_word($str3);
//                            $str4 = explode(" ", $str3);
//                            foreach ($str4 as $str5 => $str6) {
//                                if ($str5 % 2 == 0) {
//                                    $str4[$str5] = "<span style='color: #ea4d33'>$str6</span>";
//                                } else  $str4[$str5] = "<span style='color: purple'>$str6</span>";
//                            }
//                            $str7 = implode(" ", $str4);
//                            echo $str7;
                            ?>
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
        <div class="footer">
            <?
//            $pattern = '~(?<vowels>[аеёиоуыэюя])~iu';
//            preg_match_all($pattern, $str, $gl);
//            preg_match_all($pattern, $str3, $gl1);
//            $gl2 = count(array_filter($gl['vowels']));
//            $gl3 = count(array_filter($gl1['vowels']));
//            $itog = $gl2 + $gl3;
//            echo 'Гласных букв: ' . $itog . '<br>';
            function vowels($str, $str3) {
                $pattern = '~(?<vowels>[аеёиоуыэюя])~iu';
                preg_match_all($pattern, $str, $gl);
                preg_match_all($pattern, $str3, $gl1);
                $gl2 = count(array_filter($gl['vowels']));
                $gl3 = count(array_filter($gl1['vowels']));
                $itog = $gl2 + $gl3;
                echo 'Гласных букв: ' . $itog . '<br>';
            }
            vowels($str, $str3);

//            echo "<pre>";
//            $str9 = explode(" ", $str3);
//            $str10 = explode(" ", $str);
//            $str11 = count($str9, COUNT_RECURSIVE);
//            $str12 = count($str10, COUNT_RECURSIVE);
//            $str13 = $str11 + $str12;
//            echo 'Общее количество: ' . $str13;
            //        $str77 = $str.$str3;
            //        echo str_word_count($str77);
            function oll_word($str, $str3) {
                $str9 = explode(" ", $str3);
                $str10 = explode(" ", $str);
                $str11 = count($str9, COUNT_RECURSIVE);
                $str12 = count($str10, COUNT_RECURSIVE);
                $str13 = $str11 + $str12;
                echo 'Общее количество слов: ' . $str13. '<br>';
            }
            oll_word($str, $str3);

//            echo "<pre>";
//            $today = date("Y-m-d");
//            $datebirth = "1993-05-24";
//            $myday = (strtotime($today) - strtotime($datebirth)) / (60 * 60 * 24);
//            $myday_1 = round($myday);
//            echo "Мне $myday_1 дней";

            function day($today, $datebirth) {
                $myday = (strtotime($today) - strtotime($datebirth)) / (60 * 60 * 24);
                $myday_1 = round($myday);
                echo "Мне $myday_1 дня";
            }
            day(date("Y-m-d"), "1993-05-24");
            ?>
        </div>
    </footer>
</div>
</body>
</html>