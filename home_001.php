<?php
$LOGIN = "login";
$fraze = "Вы вошли под именем ";
$логин = "логин "; //ну так для фана
$фраза = "фраза";//ну так для фана
echo $fraze.$LOGIN."<br>";
echo "$fraze---.---$LOGIN"."<br>";
echo $логин.$фраза;
unset($логин,$фраза);
echo "<br>".$LOGIN.$фраза;
echo $логин.$фраза;
echo "<br>"."Задача 2";
$a = 0.013;
$b = 1.3e-2;
$c = 346.12;
$d = 3.4612e+2;
$result = $a*$a+$c*$c;
$result = "<br>".$a**2+$c**2;
echo "<br>".$result." ну выбирайте что верно"."<br>";
unset($result);
$result = $b*$b+$d*$d;
echo $result."<br>";
unset($result);
$result = $a*$b+$c*$d;
echo $result."<br>";
unset($result);
echo "$result"."что-то тут не так<br>";
echo $a*$a+$c*$c." РАЗ<br>";
echo $b*$b+$c*$c." ДВА<br>";
echo $a*$b+$c*$d." ТРИ<br>";
/** Ну так для себя */
$a = 0; $b = 1;
if ($a = $b) echo "a и b одинаковы";
else echo "a и b различны"; //ахахха
echo "<br>"."Задача 3<br>";
$way_length = 340; //340 km
$way_time = 4; //4 hours
echo "Средняя скорость движения на участке в $way_length км за $way_time часа ".$way_length/$way_time."км/ч"." или ".$way_length*1000/$way_time/3600 ." м/c";
echo "<br> Задача 4<br>";
define("pi",3.14);
echo pi."<br>";
//echo __FILE__."<br>";
//echo __LINE__."<br>";
const pi = 3.14231;
echo pi."Переопределить попытались 1<br>";
define("pi", 3.14444);
echo pi."Переопределить попытались 2<br>";
echo PHP_OS;
/**
 * Created by PhpStorm.
 * User: Sclif
 * Date: 10.01.2018
 * Time: 22:24
 */


