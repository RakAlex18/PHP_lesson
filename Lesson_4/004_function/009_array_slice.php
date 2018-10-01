<?php

/*
array_slice — Выбирает срез массива

array_slice() возвращает последовательность элементов массива array, определённую параметрами offset (откуда ведем счет) и length (длина среза).


*/
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // возвращает "c", "d", и "e"
$output = array_slice($input, -2, 1);  // возвращает "d"
$output = array_slice($input, 0, 3);   // возвращает "a", "b", и "c"

print_r($output);

?>