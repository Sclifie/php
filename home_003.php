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
converter($rus_stroka,'upfrst');
/**
 * Created by PhpStorm.
 * User: Sclif
 * Date: 16.01.2018
 * Time: 14:23
 */