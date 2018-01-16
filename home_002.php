<?php
echo 'Задание 1'; //сразу говорю, что писал как понял
echo '<br>';
//array_combine //образует один масссив keys => values
$a = array('green', 'red', 'yellow'); //keys
$b = array('avocado', 'apple', 'banana'); //values
$c = array_combine($a, $b);
print_r($c);
echo '<br>';
//array_unique //отсеивает лишние(не уникальные) значения
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
//array_count_values
$d = array_count_values($input); //считает значения массива только string и integer
echo '<br>';
print_r($d);
//count считает число значений масссива или объекта
$count[0] = 1;
$count[1] = [1,2];
$count[1] = 3;
$count[2] = 5;
var_dump(count($count, COUNT_RECURSIVE)); //не очень понял

$count1[0]  = 7;
$count1[1]  = 10;
$count1[5]  = 9;
$count1[10] = 11;
var_dump(count($count1));
//array_diff_keys сравнивает массиивы по их ключам и выдаёт разницу, за массив образец берётся первый, за массив сравнение второй
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
var_dump('green' === 'cyan');
var_dump(array_diff_key($array2, $array1));
//in array проверяет есть-ли значение в массиве третий параметр true - проверяются ещё и типы
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {
    echo "Нашел mac";
}
//array_intersect_key() сразвнивает ключи и возвращает ассоциативный массив для фильтров в магазине очеь хорошо(строгих)
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));
//range - создаёт массив
foreach (range('a', 'i', 1) as $letter) {
    echo $letter;
}
echo '<br>';
echo 'Задание 2';
echo '<br>';
$array =  [3, 1, 6, 0, 4, 5];
foreach ($array as &$elem) { //Изменяем исходный массив
    $elem = $elem ** 2; //квадрат
    $sum += $elem;
};
print_r($array);
echo '<br>' . 'Сумма квадратов ' .$sum . '<br>'; //Вариант 1
echo 'Сумма квадратов ' . array_sum($array) . '<br>'; //Вариант 2
echo '<br>';
echo 'Задание 3';
echo '<br>';
for ($x = 1; $x <= 10; $x++){
    echo "<div style='width: 100px; display: inline-block; float: left;'>";
    for ($y = 1; $y <= 10; $y++){
        echo $x . ' * ' . $y . ' = ' . $x*$y . '<br>';
    }
    echo "</div>";
}
echo '<br>';
echo '<hr width="100%"> Задание 4';
echo '<br><div style="width: 100%; display: block"></div>';
$heigh = 15; //обычный прижатый
for ($y = 1; $y < $heigh; $y++){   //Вариант 1
    echo '<br>';
    for ($x = 0; $x < $y; $x++){
        echo '*';
    }
}
echo '<br>';
for ($y = 1; $y < $heigh; $y++){  //Вариант 2
    echo str_repeat('*',$y) . '<br>';
}
//Вариант 3 и правильный
echo '<br>';
for ($y = 1; $y < $heigh; $y++){
    for ($x = 0; $x < $heigh; $x++){
        $resultat = $x > $heigh - $y ? '*' : "&nbsp;"; //20 минут провозился пока не понял что дело в &nbsp;
//        $resultat = $x > $heigh - $y && $x == $y ? '*' : "&nbsp;"; // он говорит вам здравствуйте
        echo $resultat;
    }
    echo '<br>';
}
echo '<br>';
echo '<br>';
echo 'Задание 5';
echo '<br>';
$week = [
    "пн",
    "вт",
    "ср",
    "чт",
    "пт",
    "сб",
    "вс"
];
$daynum = (int)date(N);
foreach ($week as $key => $day){
    $key+=1;
    if($daynum === $key){
        echo '<strong>' . $day . '</strong>' . '<br>';
    } else {
        echo $day . '<br>';
    }
}
echo '<br>';
echo 'Задание 6';
echo '<br>';
foreach (range(0,30) as $num){
    if($num % 5 !== 0 && strpos($num,"3") !== false){ //num преобразовался к string
        echo $num . '<br>';
    }

}
echo '<br>';
echo 'Задание 7';
echo '<br>';
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];
foreach ($arr as $keys => $items){
    $variable[$keys] = $items['price'];
}
array_multisort($variable,$arr);
var_dump($arr);
/**
 * Created by PhpStorm.
 * User: Sclif
 * Date: 15.01.2018
 * Time: 23:50
 */