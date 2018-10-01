<?php
//rsort — Сортирует массив в обратном порядке
//sort — Сортирует массив

    $fruits = array("lemon", "orange", "banana", "apple");
    sort($fruits);

    foreach ($fruits as $key => $val) {
        echo "fruits[" . $key . "] = " . $val . "<br>";
    }

    echo '<br>';

    $fruits = array("lemon", "orange", "banana", "apple");

    rsort($fruits);
    foreach ($fruits as $key => $val) {
        echo "$key = $val<br>";
    }

?>