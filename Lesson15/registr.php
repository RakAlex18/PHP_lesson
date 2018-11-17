/*ДОРАБОТАТЬ*/
<?php
require_once "registration.class.php";
$form = new Registration($_POST);
if ($_POST){
    if($form->validate()){
        echo "Регистрация успешна";
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
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="confirmPassword">
    <input type="submit" name="submit" id="">



</form>
</body>
</html>