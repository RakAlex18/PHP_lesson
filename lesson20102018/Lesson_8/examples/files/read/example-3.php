<?php

$handler = fopen('../test-file', 'r');
$i = 0;

//ob_start();
$symbols = fpassthru($handler);
echo "Это какая-то строка , которую необходимо вывести в конце файла)<br />";
//
//$file_content = ob_get_clean();
fclose($handler);

//echo nl2br($file_content);
//echo "<br />Было считано {$symbols} символов";