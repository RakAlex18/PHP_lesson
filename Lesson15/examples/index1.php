<?php
  // function __autoload($class_name) {
  //   require_once 'classes/'.$class_name.'.php';
  // }

spl_autoload_register(function($class_name) {
  require_once 'classes/'.$class_name.'.php';
});

  // $aCar = new ACar('red', 4, 2);

  //$car = new Car('red', 4, 2);

  //$car -> go();

  $jeep = new Jeep('green', 6, 4);

  $jeep -> go();

  $jeep -> start();

  $jeep -> stop();

  // print_r($jeep);

  // print_r($car);

  // echo "<br>";

  // echo $jeep -> color;

  // $jeep = new Jeep('red', 4, 2);

  // $jeep -> displayWheel();

  // $jeep -> jump();


  // $man = new Man();

  // $man -> sayHello();

  // echo Man::HANDS;

?>