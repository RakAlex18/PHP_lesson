<?php
    session_start(); // открыли сессию
    if (!isset($_SESSION['counter']))  // проверяем есть ли ячейка counter если нет, то создаем ее
        $_SESSION['counter'] = 0; // присваиваем значение 0

    echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";

    echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить</a><br />"; // указывает на тот файл который сейчас выполняется

    echo "<br>";

    echo "id сессии = ".session_id().""; // получаем id сессии

    echo "<br>";

    $name = "Alex"; 
    $age = 26;
    $work = "web-developer";

    $_SESSION['user'] = array( // сохраняем в сессии информацию о пользователе
        'name' => $name,
        'age'  => $age,
        'work' => $work
    );
    echo "<br><a href='advance.php'>Дополнительная информация</a>";

