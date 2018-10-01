<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 01/10/2018</title>
</head>
<body>

<?php
//Создать функцию, которая возвращает сумму двух чисел
function calculate($number1, $number2) {
    $sum = $number1 + $number2;
    return $sum;
}

echo calculate(1,3)."<br>"; // 4
?>
<!--Создать функцию приветствия-->
<?php
function hello($name){
    echo 'Hello'.$name;
}
hello("Дима");
?>
<br>
<?php
// внешние переменные
$first = 14;
$second = 6;
// аргументы, как способ передать внешнюю переменную внутрь
function calcul($number1, $number2) {
    // Переменная отсюда не видна
    echo $first;

    echo $number1;
}

echo calcul($first, $second)."<br>";
?>
<!--Создать функцию, которая отрисовывает таблицу умножения-->
<?php
function table($name1, $name2){?>
    <table border="1">
        <caption>Таблица умножения</caption>
        <?php
            for ($i = 1; $i <= $name1; $i++) {
        ?>
        <tr>
            <?php
            for ($j = 1; $j <= $name2; $j++) {
                ?>
                <td><?= $i*$j ?></td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>
<?php
}
table(7,7);
?>

<br>

<!--ФункциЯ, принимающая массив строк и выводЯщаЯ каждую строку в отдельном параграфе-->
<?php
function strp($arr){
    foreach ($arr as $elem){?>
        <p><?= $elem ?></p>
<?php

    }
}
strp(["Dima", "Sacha", "Olyay", "Ira"]);
?>

<br>
<?php

$fruits = array("lemon", "orange", "banana", "apple");

array_walk($fruits, function($value) {
    echo $value . ", ";
});
// array_walk - встроенная функция
// $fruits - первый аргумент, массив
// function($value) - второй аргумент, анонимная функция
?>
<br>
<?php

$title = "Lorem Ipsum is simply dummy text";

function cut_text($text, $num_letters) {
    $num = strlen($text);

    if ($num > $num_letters) {
        $text = substr($text, 0, $num_letters);
        $text .= "...";
    }

    return $text;
}

echo cut_text($title, 11);
?>

</body>
</html>
