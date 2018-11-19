<?php
/*
require_once "db.class.php";

$db = new Database('localhost', 'root', '', 'avtodorogi');
$news = $db->selectAll('SELECT * FROM users');
echo "<pre>";
print_r($news);
echo "<pre>";
*/

if (isset($_GET)){
    echo $_GET['msg'];
}
?>