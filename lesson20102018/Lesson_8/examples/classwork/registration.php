<?php

  echo "<h3/><span style='color:green;'>Новый пользователь добавлен</span><h3/>";

  $users = 'users.txt';

  $login = $_POST['login'];

    // if($login == '')

  // { 
  //   echo "<h3/><span style='color:red;'>Обязательное поле не заполнено!</span><h3/>";
  //   return false;
  // }

  // if(strlen($login) < 3 || strlen($login) > 30)
  // {
  //   echo "<h3/><span style='color:red;'>Имя и должно быть от 3 до 30 символов!</span><h3/>";
  //   return false; 
  // }
  //   else {
  //     echo "<h3/><span style='color:green;'>Новый пользователь добавлен</span><h3/>";
  //   }

  $file = fopen($users,'a+');

  $line = $login.''."\r\n";

  fputs($file, $line);

  fclose($file);

  return true;


?>
