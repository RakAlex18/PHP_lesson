<?php
//str_replace — Заменяет все вхождения строки поиска на строку замены

    // присваивает <body text='black'>
    echo $bodytag = str_replace("%body%", "black", "<body text='%body%'>");


    echo '<br>';
    // присваивает: Hll Wrld f PHP
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    echo $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");


    echo '<br>';
    $phrase  = "You should eat fruits, vegetables, and fiber every day.";
    $healthy = array("fruits", "vegetables", "fiber");
    $yummy   = array("pizza", "beer", "ice cream");

    echo $newphrase = str_replace($healthy, $yummy, $phrase);
    echo '<br>';

    $str = str_replace("ll", "", "good golly miss molly!", $count);
    echo $count;
?>