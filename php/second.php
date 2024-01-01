<?php
$answer = 0;
$test = 4;
$number = 100;
while ($answer != 20) {
    echo 'Do you want to continue?';
    $answer++;
    echo $answer."<br>";
}
$stroke = "vasya";
$fruits = array('apple', 'banana', 'orange');
foreach ($fruits as $fruit) {
    echo $fruit."<br>";
}

foreach ($fruits as $fruit) {
    if ($fruit != 'banana') {
        continue;
    }
    echo $fruit."<br>";
}

$name = 'John';
for ($i = 0; $i < strlen($name); $i++) {
    echo $name[$i]."<br>";
}

$color = "red";

if ($test > 0 || $test < 5) {
    echo $test;
}

switch ($color) {
    case "red":
        echo "Color is red";
        break;
    case "blue":
        echo "Color is blue";
        break;
    case "green":
        echo "Color is green";
        break;
    default:
        echo "Color is not red, blue, or green";
}


function sayHello($hi = "Hello World") {
    echo $hi;
}

sayHello();

