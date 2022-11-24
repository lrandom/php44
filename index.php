<?php
spl_autoload_register(function ($class_name) {
    include 'sub'.DIRECTORY_SEPARATOR.$class_name . '.php';
});

$vinfast = new Car('Vinfast');
$vinfast->drive();

$nouvo = new Motor("nouvo");
$nouvo->drive();
?>