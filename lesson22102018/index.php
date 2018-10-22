<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$lines = file('names.txt');
//var_dump($lines);
?>
<select name="names" id="">
    <?php
    foreach ($lines as $name) {
        ?>
        <option value=""><?= $name ?></option>
        <?php
    }
    ?>
</select>


</body>
</html>




