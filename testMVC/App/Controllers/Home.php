<?php
namespace App\Controllers;

use Core\View;

class Home{


    public function index(){

        echo 'Главная страница';
    View::render('home/index.php');
    }
}


?>


