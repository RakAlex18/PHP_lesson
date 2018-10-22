<?php
  if(!isset($_COOKIE['name'])) // проверяет, существует ли куки-файл с именем name
    {
      setcookie("name", "Johnnie Walker", time()+60*60*24, "/","", 0); // создаем файл с именем name
      setcookie("volume", "1", time()+60*60*24, "/", "", 0); // создаем файл с именем volume
    }
  else
    {
      $_COOKIE['volume']=$_COOKIE['volume']+1; // Если же куки name существует, то значение другой куки, с именем volume, увеличивается на 1
      setcookie("volume", $_COOKIE['volume']);
    }
  echo 'Name:'.$_COOKIE['name'].'<br/>'; // вывод в браузер
  echo 'Volume:'.$_COOKIE['volume'].'<br/>';
?>
<a href="cookie.php">Increase</a>