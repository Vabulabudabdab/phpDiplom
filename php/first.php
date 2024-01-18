<?php
$my_array = [1, 2, 3];
array_push($my_array, 4);
//print_r($my_array);
$students = [    ['name' => 'John', 'age' => 20, 'grades' => [5, 4, 4]],
    ['name' => 'Alice', 'age' => 19, 'grades' => [4, 5, 3]],
    ['name' => 'Bob', 'age' => 21, 'grades' => [3, 4, 5]],
];
$numbers = [1, 2, 3, 4, 5, 6, 7];
$sum = array_reduce($numbers, function($acc, $x) {
    return $acc + $x;
}, 0);

$fruits = [
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
];
foreach ($my_array as $my_arr) {
    echo $my_arr;
}

array_push($my_array, 5);
echo $my_arr."<br>";

unset($my_array[4]);

foreach ($my_array as $my_arr) {
    echo $my_arr;
}

foreach ($fruits as $frut) {
    echo $frut;
}

print_r($sum."<br>")."<br>";
$numbers = [1, 2, 3];
array_walk($numbers, function($value, $key) {
    echo "[$key] => $value\n";
});