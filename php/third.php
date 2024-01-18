<?php

class People {
    public $name = "Vanek";
    public $age = 18000;
    public $hairColor = "pink";

    function sayHi() {
        echo "Я люблю программировать, я очень люблю большие строки кода"."<br>";
    }

    public function age($age) {
        $this->age = $age;
    }

    public function skinColor($color) {
        $this->$color = $color;
    }
    public function sayAge() {
        return $this -> $age;
    }
}


$Pip = new People();
$Pip->sayHi();
echo "Великий Ванёк прожил: ".$Pip->age." лет.";

