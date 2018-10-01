<?php
//usort - Сортирует массив по значениям используя пользовательскую функцию для сравнения элементов
    function cmp($a, $b){
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    $a = array(3, 2, 5, 6, 1);

    usort($a, "cmp");

    var_dump($a);

?>