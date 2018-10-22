<?php

$handle = fopen('write-file-2', 'w');
fputs($handle, 'Тестовые данные'.PHP_EOL, 10);
fclose($handle);