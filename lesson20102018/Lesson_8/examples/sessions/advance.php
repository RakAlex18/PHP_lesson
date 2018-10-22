<?php
    session_start(); // открываем сессиию

    echo "id сессии = ".session_id().""; // получаем id сессии

    echo "<br>";
    echo "<br>";

    $user = null; // пока пустая

    if(isset($_SESSION['user'])){ // проверяем если есть такая ячейка, то заносим данные сессии пользователя в переменную $user
        $user = $_SESSION['user'];
    }

    if(!is_null($user)){ // если не пустая , то выводим

        echo "Имя:".$user['name']."<br />";
        echo "Возраст:".$user['age']."<br />";
        echo "Род занятий:".$user['work']."<br />";

    } else {

        echo "<br />Нет данных о пользователе<br />";

    }

   echo "<br /><a href='logout.php'>Закрыть сессию</a><br />";
