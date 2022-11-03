<?php

class Human
{
    var $name;
    var $height;
    var $weight;
    var $hairColor;
    var $eyeColor;

    function run()
    {
        echo $this->name . ' đang chạy';
    }

    function walk()
    {
        echo $this->name . ' đang đi bộ';
    }

    function eat()
    {
        echo $this->name . ' đang đi ăn';
    }
}


$luan = new Human();
$luan->name = "Luân";
$luan->height = "1m72";
$luan->weight = 75;
$luan->eyeColor = "brown";
$luan->hairColor = "black";
$luan->run();
$luan->eat();
$luan->walk();

$phuong= new Human();
$phuong->name = "Phương";
$phuong->height = "1m72";
$phuong->weight = 50;
$phuong->eyeColor = "black";
$phuong->hairColor = "black";
$phuong->run();
$phuong->eat();
$phuong->walk();
