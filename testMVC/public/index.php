<?php


//echo 'Запрашиваемый УРЛ ' . $_SERVER['QUERY_STRING'];
//require_once '../Core/Router.php';
//__DIR__
//Загружаем наши классы
spl_autoload_register(function ($class){

    //получаем родительскую директорию
    $root = dirname(__DIR__);
    //получаем путь к файлу
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';

    if (is_readable($file)){
        include $file;
    }
});

$router = new Core\Router();

//echo get_class($router);

//добавим роутеры
$router->add('/',[
    'controller'=>'Home',
    'action' => 'index'
]);

$router->add('posts',[
    'controller'=>'Posts',
    'action' => 'index'
]);

$router->add('posts/show',[
    'controller'=>'Posts',
    'action' => 'show'
]);

//отобразим вышеприведенные роутеры
//echo "<pre>";
//var_dump($router->getRoutes());


?>