<?php 

  $a = array(2,4,7,12,45,56);

  echo count($a)."<br>";

?>

<?php
    $food = array('fruits' => array('orange', 'banana', 'apple'),
                  'veggie' => array('carrot', 'collard', 'pea'));

    // рекурсивный count
    echo count($food, COUNT_RECURSIVE)."<br>";  // output 8

    // обычный count
    echo count($food);                  // output 2

?>