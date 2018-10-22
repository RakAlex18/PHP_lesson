<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="form.php">
    <label for="name"></label>
    <input type="text" class="form-control" value="name" name="name">

</form>
</body>
</html>
<?php

$name = $email = $password = '';
$nameErr = $emailErr'';
  if ($_POST('submit')//нажата ли кнопка
  {if (empty ($_POST['name'])) //если переменная пустая
      $nameErr = 'Name обязательно для заполнения';
  }
  )

  die(); //останавливает выполнение скрипта после этой команды
  ?>


