<?php

session_start(); // открываем сессиию

session_destroy(); // очищаем сессиию
setcookie(session_name(), ''); // удаляем сессионные куки

header("HTTP/1.1 307 Temporary Redirect");
header("Location: advance.php"); // делаем редирект на нашу страницу
exit;