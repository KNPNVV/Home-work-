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

?>

</body>
</html>