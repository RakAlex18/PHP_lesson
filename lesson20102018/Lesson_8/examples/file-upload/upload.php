<?php

$file = $_FILES['file'];

$dir = 'uploads';

if(!file_exists($dir)){
    mkdir($dir, 0777);
}

$file_name = $dir.'/'.$file['name'];

if(move_uploaded_file($file['tmp_name'], $file_name)){
    echo "Файл успешно загружен";
}else {
    echo "Возникла ошибка при загрузке файла";
}
//return;