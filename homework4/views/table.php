<?php
$theme = date('G');
if ($theme > 8 && $theme <= 20) {
    $style = "../CSS/style.css";
} else {
    $style = "../CSS/darkstyle.css";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица Димаса</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.table.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $style; ?>">
</head>
<body>
<? include '../header.php' ?>
<table border="1" align="center" cellspacing="0">
    <tr bgcolor="#fbff57">
        <td>
            <div class="aluminum">
                <p class="element">AL</p>
                <p align="right" class="charge">13<br>26,9815</p>
            </div>
            <p class="name">Алюминий</p>
        </td>
        <td>
            <div class="kremlin">
                <p class="element">Si</p>
                <p align="right" class="charge">14<br>28,086</p>
            </div>
            <p class="name">Кремний</p>
        </td>
        <td>
            <div class="phosphorus">
                <p class="element">P</p>
                <p align="right" class="charge">15<br>30,9738</p>
            </div>
            <p class="name">Фосфор</p>
        </td>
        <td>
            <div class="chlorine">
                <p class="element">Cl</p>
                <p align="right" class="charge">17<br>35,453</p>
            </div>
            <p class="name">Хлор</p>
        </td>
    </tr>
    <tr bgcolor="#7fffd4">
        <td>
            <div class="scandium">
                <p align="left" class="charge">21<br>44,956</p>
                <p class="element">Sc</p>
            </div>
            <p class="names">Скандий</p>
        </td>
        <td>
            <div class="titanium">
                <p align="left" class="charge">22<br>47,90</p>
                <p class="element">Ti</p>
            </div>
            <p class="names">Титан</p>
        </td>
        <td>
            <div class="vanadium">
                <p align="left" class="charge">23<br>50,942</p>
                <p class="element">V</p>
            </div>
            <p class="names">Ванадий</p>
        </td>
        <td>
            <div class="manganese">
                <p align="left" class="charge">25<br>54,938</p>
                <p class="element">Mn</p>
            </div>
            <p class="names">Марганец</p>
        </td>
    </tr>
    <tr bgcolor="#fbff57">
        <td>
            <div class="gallium">
                <p class="element">Ga</p>
                <p align="right" class="charge">31<br>69,72</p>
            </div>
            <p class="name">Галлий</p>
        </td>
        <td>
            <div class="germanium">
                <p class="element">Ge</p>
                <p align="right" class="charge">32<br>75,59</p>
            </div>
            <p class="name">Германий</p>
        </td>
        <td>
            <div class="arsenic">
                <p class="element">As</p>
                <p align="right" class="charge">33<br>74,9216</p>
            </div>
            <p class="name">Мышьяк</p>
        </td>
        <td>
            <div class="bromine">
                <p class="element">Br</p>
                <p align="right" class="charge">35<br>79,904</p>
            </div>
            <p class="name">Бром</p>
        </td>
    </tr>
    <tr bgcolor="#7fffd4">
        <td>
            <div class="yttrium">
                <p align="left" class="charge">39<br>88,905</p>
                <p class="element">Y</p>
            </div>
            <p class="names">Иттрий</p>
        </td>
        <td>
            <div class="zirconium">
                <p align="left" class="charge">40<br>91,22</p>
                <p class="element">Zr</p>
            </div>
            <p class="names">Цирконий</p>
        </td>
        <td>
            <div class="niobium">
                <p align="left" class="charge">41<br>92,906</p>
                <p class="element">Nb</p>
            </div>
            <p class="names">Ниобий</p>
        </td>
        <td>
            <div class="technetium">
                <p align="left" class="charge">43<br>(99)</p>
                <p class="element">Tc</p>
            </div>
            <p class="names">Технеций</p>
        </td>
    </tr>
</table>
</body>
</html>