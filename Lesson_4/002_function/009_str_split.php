<?php

//str_split — Преобразует строку в массив
$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);

echo '<br>';

print_r($arr2);
?>