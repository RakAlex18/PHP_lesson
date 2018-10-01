

<?php
	//Укажем ключи в явном виде:
	$a = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	echo $a[3]."<br>"; //выведет 'ср'
	echo $a[3]."<br>"; //выведет 'ср'
	echo $a[3]."<br>"; //выведет 'ср'
	echo $a[5]."<br>"; //выведет 'пт'
echo gettype($a)."<br>";
echo gettype($a[2]);
echo "<pre>";/*для корректного отображения массива*/
var_dump($a);

$num = 52;
$sum = 10;
echo $num + $sum ."<br>";
echo $result = $num - $sum ."<br>";
echo $result += $num;
echo "<br>";
echo $num + $sum ."<br>";
$result = 8;
if (($num > 55 and $num > $result) or ($num == 52 and $sum = 10)) {
    echo "OK";
}
else {
    echo "NO";
}
?>