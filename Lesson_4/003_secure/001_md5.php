<?php
//md5 — Возвращает MD5-хэш строки

    $str = 'яблоко';
    echo '<br>';
    echo md5($str);
    echo '<br>';

    if (md5($str) === '1afa148eb41f2e7103f21410bf48346c') {
        echo "проверка пройдена";
    }


?>