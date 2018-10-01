<?php

    //explode — Разбивает строку с помощью разделителя

$pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // кусок1
echo $pieces[1]; // кусок2

?>