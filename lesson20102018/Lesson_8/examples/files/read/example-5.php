<?php

$handler = fopen('../test-file', 'r');

fseek($handler, 2000);

while(!feof($handler)){
    $line = fgets($handler);
    echo $line.'<br />';
}

fclose($handler);