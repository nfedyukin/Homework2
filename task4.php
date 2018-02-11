<?php
$namelist = ['альберт',
    'александр',
    'артем',
    'тёма',
    'максим',
    'михаил',
    'миша',
    'иван',
    'ваня',
    'даниил',
    'даня',
    'алексей',
    'лёша',
    'лёха',
    'дмитрий',
    'дима',
    'матвей',
    'андрей',
    'кирилл',
    'николай',
    'коля',
    'анна',
    'аня',
    'виктория',
    'вика',
    'алиса',
    'полина',
    'анастасия',
    'настя',
    'александра',
    'евгения',
    'катя',
    'екатерина',
    'наталья',
    'мария',
    'маша'
];

$occurrence = function ($curry, $item){
    $curry[0] += iconv_strlen($item, 'UTF-8');
    $curry[1] += substr_count($item, 'ё');
    return $curry;
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 4</title>
</head>
<body>
<h1> Задание №4</h1>
<h2> Частота встречаемости буквы "Ё" в именах.</h2>

Частота встречаемости букв "ё" в именах:
<?php
 $occur = array_reduce($namelist, $occurrence);
 echo round($occur[1]*100/$occur[0], 2);
?>%.

<br><br>
<a href="index.html">   Назад</a>

</body>
</html>