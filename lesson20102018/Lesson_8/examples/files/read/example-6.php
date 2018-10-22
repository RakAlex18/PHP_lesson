<?php

$data_file = file('../test-file');

foreach($data_file as $line){
    echo $line.'<br />';
}