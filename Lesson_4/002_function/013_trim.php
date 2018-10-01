<?php

//trim — Удаляет пробелы (или другие символы) из начала и конца строки
    $text   = "\t\tThese are a few words :) ...  ";
    $binary = "\x09Example string\x0A";
    $hello  = "Hello World";
    var_dump($text, $binary, $hello);

    print "\n";

    $trimmed = trim($text);
    var_dump($trimmed);

    $trimmed = trim($text, " \t.");
    var_dump($trimmed);

    $trimmed = trim($hello, "Hdle");
    var_dump($trimmed);

    $trimmed = trim($hello, 'HdWr');
    var_dump($trimmed);

    // удаляем управляющие ASCII-символы с начала и конца $binary
    // (от 0 до 31 включительно)
    $clean = trim($binary, "\x00..\x1F");
    var_dump($clean);
?>