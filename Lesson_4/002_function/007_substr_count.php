<?php

//substr_count — Возвращает число вхождений подстроки

    $text = 'This is a test';


    echo substr_count($text, 'is'); // 2

    // строка уменьшается до 's is a test', поэтому вывод будет 1
    echo substr_count($text, 'is', 3);

    // текст уменьшается до 's i', поэтому вывод будет 0
    echo substr_count($text, 'is', 3, 3);

    // генерирует предупреждение, так как  5+10 > 14
    echo substr_count($text, 'is', 5, 10);
?>