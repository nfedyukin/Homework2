<?php
    require  __DIR__ . '/functions.php';
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
<h3>Вариант 1 </h3>
Дано квадратное уровнение:
<?php
$numtostr = function($n){
    return ($n >= 0 ? ' + ' . abs($n) : ' - ' . abs($n));
};

// Зададим значениекоэфициентов квадратного уровнения
$a = 1;
$b = -2;
$c = -3;

?>
<!--Выводим квадратное уровнение-->
<i><?php echo $numtostr($a) ?>x<sup>2</sup><?php echo $numtostr($b) ?>x<?php echo $numtostr($c) ?> = 0</i>
<br>
Вычислим дискриминант. D =
<?php
    echo  $D = discriminant($a, $b, $c);?> <br> <?php
    echo getRoots($a, $b, $D);
?><br>

<h3>Вариант 2 </h3>
Дано квадратное уровнение:
<?php
$numtostr = function($n){
    return ($n >= 0 ? ' + ' . abs($n) : ' - ' . abs($n));
};

// Зададим значениекоэфициентов квадратного уровнения
$a = 1;
$b = 2;
$c = 15;

?>
<!--Выводим квадратное уровнение-->
<i><?php echo $numtostr($a) ?>x<sup>2</sup><?php echo $numtostr($b) ?>x<?php echo $numtostr($c) ?> = 0</i>
<br>
Вычислим дискриминант. D =
<?php
echo  $D = discriminant($a, $b, $c);?> <br> <?php
echo getRoots($a, $b, $D);
?><br>

<h3>Вариант 3 </h3>
Дано квадратное уровнение:
<?php
$numtostr = function($n){
    return ($n >= 0 ? ' + ' . abs($n) : ' - ' . abs($n));
};

// Зададим значениекоэфициентов квадратного уровнения
$a = 1;
$b = 12;
$c = 36;

?>
<!--Выводим квадратное уровнение-->
<i><?php echo $numtostr($a) ?>x<sup>2</sup><?php echo $numtostr($b) ?>x<?php echo $numtostr($c) ?> = 0</i>
<br>
Вычислим дискриминант. D =
<?php
echo  $D = discriminant($a, $b, $c);?> <br> <?php
echo getRoots($a, $b, $D);
?><br><br><br>

<a href="index.html">   Назад</a>


</body>
</html>