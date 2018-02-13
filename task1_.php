<?php
    require  __DIR__ . '/functions.php';

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1</title>
</head>
<body>


<h1> Задание №1</h1>
<h2>Решение квадратного уровнения.</h2>
<form action="" method="post">
    <h3>Введите значения коэфициентов квадратного уровнения (пустое значение для a и b соответствует 1, для c  - 0):</h3>
    <i> <input type="text" name="sqareeq[qa]" size="3"/>x<sup>2</sup> + <input type="text" name="sqareeq[qb]" size="3"/> x + <input type="text" name="sqareeq[qc]" size="3"/> = 0 </i>
    <br> <br>
    <input type="submit" value="Рассчитать" />
</form>



<?php
$numtostr = function($n){
    return ($n >= 0 ? ' + ' . abs($n) : ' - ' . abs($n));

};
if ($_POST) {
    $a = clean($_POST[sqareeq][qa]);
    $b = clean($_POST[sqareeq][qb]);
    $c = clean($_POST[sqareeq][qc]);
    $a = ($a == '' ? 1 : (int)$a);
    $b = ($b == '' ? 1 : (int)$b);
    $c = ($c == '' ? 0 : (int)$c);


    if ($a == 0){
        ?> Коэфициент "a" не может быть равен 0.<?php
    } else{
        ?>
        <!--Выводим квадратное уровнение-->
        Дано квадратное уровнение:
        <i><?php

            echo $numtostr($a) ?>x<sup>2</sup><?php echo $numtostr($b) ?>x<?php echo $numtostr($c) ?> = 0</i>
        <br>
        Вычислим дискриминант. D =
        <?php

        echo  $D = discriminant($a, $b, $c);?> <br> <?php
        echo getRoots($a, $b, $D);
    }

    //echo (int)$a . ' | ' . (int)$b . ' | ' .  (int)$c;
}?>

<br><br><br>

<a href="index.html">   Назад</a>


</body>
</html>