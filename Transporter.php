<?php

class Transporter
{
    var $name;
    var $material;

    function run()
    {

    }
}

class Car extends Transporter
{

}

class eCar extends Car
{
    function runOnWater()
    {
        echo "Trời lụt là ko xoắn";
    }
}

$fadil = new Car();
$fadil->name = "Fadil";
$fadil->material = "Steel";

$vf8 = new eCar();
$vf8->name = "vf8";
$vf8->runOnWater();