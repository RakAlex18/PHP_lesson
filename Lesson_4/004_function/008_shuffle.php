<?php

/* shuffle Ч ѕеремешивает массив
Ёта функци€ перемешивает элементы массива в случайном пор€дке. »спользуетс€ псевдослучайный генератор случайных чисел.
*/

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number <br>";
}
?>