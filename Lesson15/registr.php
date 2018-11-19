
<?php
require_once "registration.class.php";
require_once "db.class.php";
require_once "password.class.php";
$form = new Registration($_POST);
$db = new Database('localhost', 'root', '', 'avtodorogi');
if ($_POST){
    if($form->validate()){

$email=$db->escape($form->getEmail());
$name=$db->escape($form->getName());
$password=new Password($db->escape($form->getPassword()));
$res=$db->selectAll("SELECT * FROM users WHERE login = '$name'");
if ($res){
   echo $msg = "Такой пользователь существует";
} else{
    $db->selectAll("INSERT INTO users (login, email, password) VALUES ('{$name}','{$email}', '{$password}')");
header("Location: index.php?msg=Регистрация успешна");
}

    } else {
        echo $form->passwordMatch() ? 'Не все поля заполнены' : 'Пароли не совпадают';
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" value="<?=$form->getName();?>">Login
    <br>
    <input type="email" name="email" value="<?=$form->getEmail();?>">Email
    <br>

    <br>
    <input type="password" name="password">Пароль
    <br>
    <input type="password" name="confirmPassword">Повторить пароль
    <input type="submit" name="submit" id="">



</form>
</body>
</html>