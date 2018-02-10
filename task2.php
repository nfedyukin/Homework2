<?php
$include = function($file){
    if( (include $file) == TRUE){
        return 'Файл включен, include вернул TRUE';
    } else {
        return 'Ошибка включения файла, include вернул FALSE, возникла не фатальная ошибка E_WARNING';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 2</title>
</head>
<body>

<h1> Задание №2</h1>
<h2> Оператор include.</h2>

Оператор include возвращает TRUE в случае удачного включения файла и FALSE при ошибке.<br>
Попробуем включить файл
<?php
    echo __DIR__ . '/functions.php';
?>
<br> Результат:
<blockquote>
    <?php
        echo $include(__DIR__ . '/functions.php');
    ?>
</blockquote>
<br><br>
Теперь попробуем включить заведомо несуществующий файл:
<?php
    echo __DIR__ . '/functions1.php';
?> <br>
Результат:
<blockquote>
    <?php
        echo $include(__DIR__ . '/functions1.php');
    ?>
</blockquote>

<br><br>

<a href="index.html">   Назад</a>

</body>
</html>