<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//1 шаг - Соединяемся с базой данных
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "avtodorogi";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//$con = mysqli_connect($host, "root", "", "avtodorogi");
//2шаг - делаем проверку на подключение
if($con == false){
    echo"Ошибка подключения:" .mysqli_connect_error();
}
else {
//echo"Соединение установлено";
}
?>
</body>
</html>
