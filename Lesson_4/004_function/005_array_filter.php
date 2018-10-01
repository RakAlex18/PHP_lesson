<?php
//array_filter — Фильтрует элементы массива с помощью callback-функции
    function odd($var){
        // является ли переданное число нечетным
        return($var & 1);
    }

    function even($var){
        // является ли переданное число четным
        return(!($var & 1));
    }

    $array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
    $array2 = array(6, 7, 8, 9, 10, 11, 12);

    echo "Нечетные: ";
    print_r(array_filter($array1, "odd"));
	echo "<br>";
    echo "Четные: ";
    print_r(array_filter($array2, "even"));

?>