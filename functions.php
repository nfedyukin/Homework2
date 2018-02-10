<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 10.02.2018
 * Time: 14:01
 */
function discriminant($a, $b, $c){
    return $b * $b - 4 * $a * $c;
}

function getRoot1($a, $b, $D){
    return (-1 * $b + sqrt($D))/(2*$a);
}

function getRoot2($a, $b, $D){
    return (-1 * $b - sqrt($D))/(2*$a);
}

function getRoots($a, $b, $D){
    if($D > 0){
        ?><br>Дискриминант положительный, у уровнения 2 корня:<br> x<sub>1</sub> = <?php
        echo getRoot1($a, $b, $D);
        ?><br> x<sub>2</sub> = <?php
        echo getRoot2($a, $b, $D);
    }
    elseif ($D  == 0){
        ?><br>Дискриминант равен нулю, у уровнения 1 корень:<br> x<sub>1</sub> = <?php
        echo getRoot1($a, $b, $D);
    }
    else {
        ?><br>Дискриминант отрицательный, уровнения не имеет корней.<?php
    }
}