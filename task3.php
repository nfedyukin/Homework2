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
    <title>Задание 3</title>
</head>
<body>
<h1>Задание №3</h1>

<h2> Определение пола по имени: </h2>
Пол для имени Коля: <?php
 echo getSex('Коля');
?><br>Пол для имени Катя: <?php
 echo getSex('Катя');
?><br>Пол для имени Саша: <?php
 echo getSex('Саша');
?>
<br><br>

<a href="index.html">   Назад</a>

</body>
</html>