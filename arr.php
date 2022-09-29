<?php
//indexed array -> mảng chỉ số nguyên
$cars = array("Toyota", "Mazda", "Vinfast");
$car2 = [
    "Merce",
    "BMW",
    "Audi"
];
$cars[] = "Benlaz";

for ($i = 0; $i < count($cars); $i++) {
    echo "\n";
    echo $cars[$i];
}

foreach ($cars as $car) {
    echo "\n";
    echo $car;
}