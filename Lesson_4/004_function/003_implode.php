<?php
//implode — Объединяет элементы массива в строку

    $array = array('имя', 'почта', 'телефон');
    $comma_separated = implode(",", $array);

    echo $comma_separated; // имя,почта,телефон

?>