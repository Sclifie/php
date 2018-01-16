<?php
echo 'Первое задание<br>';
function sayHello($login = 'guest'){
    echo 'Hello, ' . $login;
}
sayHello();
echo '<br>';
sayHello('Sclif');
echo '<br>Второе задание<br>';
$city1 = 'Санкт-Петербург';
    $city2 = ' Москва';
        $city3 = ' Рим';
            $city4 = ' Череповец';
                $city5 = ' Астрахань';

    $str = $city1 . $city2 . $city3 . $city4 . $city5; // Это наша строка с формы
    $arr = explode(' ',$str);
    sort($arr);
    print_r($arr);
    echo '<br>';
    foreach ($arr as $item){
        echo $item . '<br>';
    }
echo '<br>Третье задание<br>';
$stroka = "Mary Had A Little Lamb and She LOVED It So"; //С русским проблемы
$rus_stroka = "Привет мой друг";
function converter($stroka, $what){
    if ($what == 'up'){
        echo mb_strtoupper($stroka);
    } else if($what == 'lower'){
        echo mb_strtolower($stroka);
    } else if($what == 'upfrst'){
        echo ucwords($stroka);
    }
}
converter($rus_stroka,'up');
echo '<br>Четвёртое задание<br>';
function tagRemover($str_to_filter){
    echo strip_tags($str_to_filter);
}
$str_in_tags = "<h1>Hello, world!</h1>";
tagRemover($str_in_tags);
echo '<br>Пятое задание<br>';
$str = range('a','z',1);
$str_fin = '';
foreach ($str as $item){
    $str_fin = $str_fin . ' ' . $item;
}
echo $str_fin;
var_dump($str_fin);
echo '<br>Шестое задание<br>';
$date = date('Y-m-d');
$date = str_ireplace('-',' . ',$date);
var_dump($date);
$date = explode(' ',$date);
var_dump(array_reverse($date));
foreach (array_reverse($date) as $item){
    echo $item;
}
echo '<br>Седьмое задание<br>';
$current_str = '/php/';
var_dump(str_replace('/','',$current_str));
echo str_replace('/','\'',$current_str);
echo '<br>Восьмое задание<br>';
$our_str = 'просто строка.';
var_dump($our_str);
var_dump(strripos($our_str,'.')); //вариант 1
if(strripos($our_str,'.',-1) !== false){
    echo $our_str;
} else { echo $our_str . '.';}
//что-то я задачи не понял rtrim - удаляет символы а не добавляет
echo '<br>Девятое задание<br>';
$current_day = date('z');
if (date('L') == 1){
    echo 'До нового года осталось : ';
    echo  (int)"365" - $current_day . " дней";}
        else {
            echo 'До нового года осталось : ';
            echo (int)"364" - $current_day . " дней";}
echo '<br>Десятое задание<br>';
function drobulka($max_val,$num){
    foreach (range(1,$max_val,1) as $value){
        echo $value/$num . '<br>';
    }
}
drobulka(5,20);
/**
 * Created by PhpStorm.
 * User: Sclif
 * Date: 16.01.2018
 * Time: 14:23
 */