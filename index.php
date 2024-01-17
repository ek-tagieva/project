<?php
# Домашнее задание #1
# Задание #1
$name = "Екатерина";
$age = "34 года";

echo "<pre>
Домашнее задание #1

Задание #1<br/>";
echo "Меня зовут: $name <br/>";
echo "Мне $age <br/>";
echo "\"!|/'\"\\<br/></pre>";

# Задание #2
define("TOTAL", 80);
define("MARKER", 23);
define("PENCIL", 40);
$paints = TOTAL - MARKER - PENCIL;

echo "<pre>Задание #2<br/>";
echo $paints . "</pre>";

# Задание #3
echo "<pre>Задание #3<br/>";
$age = 18;
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
echo "</pre>";

# Задание #4
echo "<pre>Задание #4<br/>";
$day = 10;
switch ($day) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 1:
        echo "Это рабочий день";
        break;
    case 7:
    case 6:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo "</pre>";

# Задание #5
echo "<pre>Задание #5<br/>";
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
];
$toyota = [
    "model" => "camry",
    "speed" => 100,
    "doors" => 5,
    "year" => 2016
];
$opel = [
    "model" => "X",
    "speed" => 130,
    "doors" => 5,
    "year" => 2017
];

$cars = [
    'bmw' => [
        "name" => "bmw",
        "model" => "X5",
        "speed" => 120,
        "doors" => 5,
        "year" => 2015
    ],
    'toyota' => [
        "name" => "toyota",
        "model" => "camry",
        "speed" => 100,
        "doors" => 5,
        "year" => 2016
    ],
    'opel' => [
        "name" => "opel",
        "model" => "X",
        "speed" => 130,
        "doors" => 5,
        "year" => 2017
    ]
];
echo "CAR " . $cars['bmw']["name"] . "\n" . $cars['bmw']["model"] . " " . $cars['bmw']["speed"] . " " . $cars['bmw']["doors"] . " " . $cars['bmw']["year"] . "<br/>";
echo "CAR " . $cars['toyota']["name"] . "\n" . $cars['toyota']["model"] . " " . $cars['toyota']["speed"] . " " . $cars['toyota']["doors"] . " " . $cars['toyota']["year"] . "<br/>";
echo "CAR " . $cars['opel']["name"] . "\n" . $cars['opel']["model"] . " " . $cars['opel']["speed"] . " " . $cars['opel']["doors"] . " " . $cars['opel']["year"];
echo "</pre>";

# Задание #6
echo "<pre>Задание #6<br/>";

echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "<td>(" . $result . ")</td>";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "<td>[" . $result . "]</td>";
        } else {
            echo "<td>" . $result . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "</pre>";

# Домашнее задание #2
# Задание #1
echo "<pre>
Домашнее задание #2

Задание #1<br/></pre>";
include "src/functions.php";
echo task1(['1', '2', '3']);
$result = task1(['1', '2', '3'], false);
echo $result;
# Задание #2
echo "<pre>Задание #2<br/>";
echo task2('*', 1, 2, 3, 4) . '</pre>';
# Задание #3
echo "<pre>Задание #3<br/>";
echo task3(5, 7) . '</pre>';
# Задание #4
echo "<pre>Задание #4<br/>";
date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i');
echo '<br/>';
echo strtotime('24.02.2016 00:00:00');
echo '<br/>';
echo date('Y-m-d H:i:s', 1456261200) . '</pre>';
# Задание #5
echo "<pre>Задание #5<br/>";
$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string);
echo '<br/>';
$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string) . '</pre>';

# Задание #6
echo "<pre>Задание #6<br/>";
file_put_contents('test.txt', 'Hello again!');
my_file_get_contents('test.txt');
echo '</pre>';

