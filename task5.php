<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 5</title>
</head>
<body>
<h1>Задание 5</h1>
<h2>Объясните - почему это вообще работает и как?</h2>
<blockquote><pre class="php" style="font-family:monospace;"><span style="color: #000000; font-weight: bold;">&lt;?php</span>
&nbsp;
<span style="color: #b1b100;">for</span> <span style="color: #009900;">&#40;</span><span style="color: #000088;">$i</span><span style="color: #339933;">=</span><span style="color: #cc66cc;">10</span><span style="color: #339933;">;</span><span style="color: #000088;">$i</span><span style="color: #339933;">--&gt;</span><span style="color: #cc66cc;">0</span><span style="color: #339933;">;</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#123;</span>
    <span style="color: #b1b100;">echo</span> <span style="color: #000088;">$i</span><span style="color: #339933;">;</span>
<span style="color: #009900;">&#125;</span></pre>
</blockquote>

<b>Объяснение:</b><br>
Цикл перебирает i в диапазоне от 9 до 0. Происходит это так:<br>
Первое выражение задает первоначальное значение $i = 10. В начале каждой итерации оценивается второе выражение,
в нашем случае, это $i-->0. Сначала происходит сравнение переменной $i > 0, а затем происходит декремент этой
переменной (потому что $i-- постфиксный декремент, значение уменьшается после того как возвращается значение).<br>
<br>
<b>По шагам:</b><br>
первая итерация:<br>
$i = 10<br>
$i > 0 = true<br>
$i = $i - 1<br>
echo $i // 9<br>
Вторая итерация ($i равно 9)<br>
$i > 0 = true<br>
$i = $i - 1<br>
echo $i // 8<br>
...<br>
Десятая итерация ($i равно 1)<br>
$i > 0 = true<br>
$i = $i - 1<br>
echo $i // 0<br>
Одиннадцатая итерация ($i равно 0)<br>
$i > 0 = false<br>
Выход из цикла<br>

<br><br>
<a href="index.html">   Назад</a>
</body>
</html>