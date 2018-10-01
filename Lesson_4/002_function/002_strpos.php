<?php

//strpos — Возвращает позицию первого вхождения подстроки.


$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Заметьте, что используется ===.  Использование == не даст верного 
// результата, так как 'a' находится в нулевой позиции.
if ($pos === false) {
    echo "Строка '$findme' не найдена в строке '$mystring'";
} else {
    echo "Строка '$findme' найдена в строке '$mystring'";
    echo " в позиции $pos";
}

?>