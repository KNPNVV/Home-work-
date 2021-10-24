<?php
$theme = date('G');
if ($theme > 8 && $theme <= 20) {
    $style = "../CSS/style.css";
} else {
    $style = "../CSS/darkstyle.css";
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <title>Массивы</title>
</head>
<body>
<? include '../header.php' ?>
<?php
$a = range(50, 30, -5);
$result = array_sum($a);
echo "<pre>";
print_r($a);
echo $result;

echo "<pre>";
$random = [];
for ($i = 0; $i <= 10; $i++) {
    array_push($random, mt_rand(1, 100));
};
echo "<pre>";
print_r($random);
echo "<pre>";
print_r(array_reverse($random));

echo "<pre>";
$images = array('.<img src="images/img_php/1.png">', '<img src="images/img_php/2.png">', '<img src="images/img_php/3.png">');
$img = array_rand($images, 1);
echo $images[$img];

echo "<pre>";
$end = [];
for ($i = 0; $i <= 10; $i++) {
    array_push($end, mt_rand(1, 100));
};
echo "<pre>";
print_r($end);
$element = array_pop($end);
echo "<font color='red'>";
echo "<b> $element </b>";
echo "</font>";

echo "<pre>";
$name = array('vasya', 'kolya', 'micha', 'petya');
foreach ($name as $value) {
    echo "<i>" . substr($value, 0, 1) . "</i>" . substr($value, 1) . "<br>";
}
echo "<pre>";
$family = array(
    'Ivanovs' => array('Ivan', 'Kate', 'Tom'),
    'Petrovs' => array('Bob', 'Ann', 'Tanya'),
    'Smith' => array('Kate', 'Same'),
);
foreach ($family as $fam => $chel) {
    echo $fam . " ";
    echo (count($chel)) . "<br>";
}


echo "<pre>";
$randomn = [];
for ($i = 0; $i <= 10; $i++) {
    array_push($randomn, mt_rand(1, 100));
    if ($randomn[$i] % 2 == 0) {
        echo "<b>$randomn[$i]</b>" . '<br>';
    }
    if ($randomn[$i] % 2 != 0) {
        echo $randomn[$i] . '<br>';
    }
}

echo "<pre>";
$sortirovka = array(
    'Ivanovs' => array('Anna', 'Kate', 'Tom'),
    'Petrovs' => array('Bob', 'Ann', 'Anatolyi'),
    'Smith' => array('Andrey', 'Same'),
);
foreach ($sortirovka as $aa => $bb) {
    foreach ($bb as $cc => $dd) {
        if (mb_substr($dd, 0, 1) == "A") {
            echo $dd . "<br>";
        }
    }
}
echo "<pre>";
$num = array(
    'Chetnie' => array(2, 4, 6, 8, 10),
    'Nechetnie' => array(1, 3, 5, 7, 9),
);
echo "Общее количество " . count($num, COUNT_RECURSIVE) . "<br>";
foreach ($num as $chi => $colvo) {
    echo $chi . " ";
    echo (count($colvo)) . "<br>";
}
echo "1. Создать массив произвольной длины. Вывести его на экран. Каждый четный элемент массива умножить на 10. Вывести полученный массив на экран.";
echo "<pre>";
$mass_arr = array(2, 4, 6, 8, 10, 11, 13, 22);
print_r($mass_arr);
foreach ($mass_arr as $key => $value) {
        if ($key % 2 == 0) {
           $mass_arr[$key] = $value * 10;
        }
    }
print_r($mass_arr);
echo "2. Создать массив, заполненный случайными числами. Массив состоит из n элементов. С 0 по n/2 элемент массива обернуть в курсив, элементы с n/2 по n обернуть жирным.";
echo "<pre>";
$n = [];
for ($i = 1; $i <= 10; $i++) {
    array_push($n, mt_rand(1, 32));
}
print_r($n);
$i = 0;
foreach ($n as $key_1 => $value_1) {
    if($i < 5){
        echo "<i>$value_1</i>"  ."<br/>";
    }
    $i++;
}
echo "<pre>";
echo "<pre>";
$i = 1;
foreach ($n as $key_1 => $value_1) {
    if($i > 5){
        echo "<b>$value_1</b>"  ."<br/>";
    }
    $i++;
}
echo "<pre>";
echo "3. Создать массив произвольной длины. Посчитать количество ";
echo "<pre>";
$arr_3 = array(1, 5, 8, "hello", 12.5, true, 888);
$ctn = count($arr_3);
echo "Количество элементов: " . $ctn;
echo "<pre>";
echo "4. Создать массив, заполненный случайными числами. Вывести элементы числового массива, которые больше, чем элементы, стоящие перед ними. <br> Например, дан массив [3, 9, 8, 4, 5, 1]. Следует вывести числа 9 и 5, так как перед ними стоят соответственно числа 3 и 4, которые меньше их.";
echo "<pre>";
$a = array(3, 9, 8, 4, 5, 1);
foreach ($a as $key) {
    if ($a[$key] > $a[$key-1]) {
        echo $a[$key] ."<br>";
    }
}
echo "<pre>";
echo "5. Дан массив, содержащий положительные и отрицательные числа. Заменить все элементы массива на противоположные по знаку.<br> Например, задан массив [1, -5, 0, 3, -4]. После преобразования должно получиться [-1, 5, 0, -3, 4].";
echo "<pre>";
$arr_4 = array(1, -5, 0, 3, -4);
print_r($arr_4);
foreach ($arr_4 as &$value_2) {
    if (is_numeric($value_2)) {
        $value_2 = -1*$value_2;
    }
}
print_r($arr_4);
echo "<pre>";
echo "1. Сделайте функцию, которая возвращает параметром число от 1 до 7, а возвращает день недели на русском языке.";
echo "<pre>";
function weecks($n) {
    $day = array ("Понедельник", "Вторник", "Среда", "Четверг", "Пяница", "Суббота", "Воскресенье");
    echo $day[$n - 1];
}
weecks(5);
echo "<pre>";
echo "2. Создать функцию, которая принимает массив произвольной длины  и возвращает количество положительных чисел в массиве. ";
echo "<pre>";
function positiv_num($ms) {
    foreach ($ms as $m) {
      if ($m > 0) {
          $f[] = $m;
      }
    }
    echo "Количество отрицательных элементов ". count($f);
}
positiv_num(array(1, -5, -95, 4, 5, -74, 6, 3, -9, 25));
echo "<pre>";
echo "3. Создать функцию, которая принимает строку с текстом. Венуть массив, содержащий количество гласных и согласных букв.";
echo "<pre>";
function word($rts) {
    $pattern = '~(?<vowels>[аеёиоуыэюя])~iu';
    preg_match_all($pattern, $rts, $gl);
    $ngl = count(array_filter($gl['vowels']));
    $pattern_1 = '~(?<vowels>[бвгджзклмнпрстчцшщх])~iu';
    preg_match_all($pattern_1, $rts, $sg);
    $nsg = count(array_filter($sg['vowels']));
    $sggl[] = "Гласные " .$ngl;
    $sggl_1[] = "Согласные " .$nsg;
    $result = array_merge($sggl, $sggl_1 );
    print_r($result);
}
word("Строка содержит гласные и согласные буквы");
echo "<pre>";
echo "4. Создать функцию, которая принимает строку. Данная функцию должна формировать новую строку и ее возвращать. <br> Строка убирает все знаки пробела, точки, запятые и т.п. Например, входная строка 'Привет, пользователь! Как твои дела?' преобразуется в трочку 'ПриветпользовательКактвоидела?'";
echo "<pre>";
function del($trs) {
    $trs_1 = str_replace(" ", '', $trs);
    $trs_2 = str_replace("!", '', $trs_1);
    $trs_3 = str_replace("?", '', $trs_2);
    $trs_4 = str_replace(",", '', $trs_3);
    echo $trs_4;
}
del("Привет, пользователь! Как твои дела?");
echo "<pre>";
echo "5. Создать функцию, которая принимает строку и возвращает количество заглавных букв в строке.";
echo "<pre>";
function big_word($big) {
    $zag = mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/u', '', $big), 'UTF-8');
    echo "Заглавных букв " .$zag;
}
big_word("Аня, Яна, Маша");
?>

</body>
</html>