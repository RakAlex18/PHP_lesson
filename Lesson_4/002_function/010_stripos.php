<?php

//stripos — Возвращает позицию первого вхождения подстроки без учета регистра
//В отличие от strpos(), эта функция не учитывает регистр символов.

$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// Конечно, 'a' не входит в 'xyz'
if ($pos1 === false) {
    echo "Строка '$findme' не найдена в строке '$mystring1'";
}

// Заметьте, что используется ===.  Использование == не даст верного 
// результата, так как 'a' в нулевой позиции.
if ($pos2 !== false) {
    echo "Нашел '$findme' в '$mystring2' в позиции $pos2";
}
?>