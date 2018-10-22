 <?php
if (isset($_FILES['avatar'])) { // загруженный файл в массиве $_FILES

        $file = $_FILES['avatar'];

        print("Загружен файл с именем " . $file['name'] 

        . " и размером " . $file['size'] . " байт");


}
$filetmp = $_FILES['avatar']['tmp_name'];
$dir = "uploads";
if(!file_exists($dir)){
    mkdir($dir, 0777);//0777 - права доступа
}
$file_name = $dir.'/'.$file['name'];
move_uploaded_file($filetmp, $file_name);
?>
  