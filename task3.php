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
<?php

$arr = [1,2,3,4];

echo var_dump(array_reduce(
    $arr,
    function(&$res, $a) { $res += $a; },
    0
));



?>

</body>
</html>