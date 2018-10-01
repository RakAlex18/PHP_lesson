<?php
//strip_tags — Удаляет HTML и PHP-теги из строки
    $text = '<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Еще текст</a>';
    echo strip_tags($text);
    echo "\n";

    // Разрешаем <p> и <a>
    echo strip_tags($text, '<p><a>');

?>