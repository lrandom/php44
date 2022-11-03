<?php

class Car
{
    protected $name;

    private function run()
    {

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function makeRunning()
    {
        $this->run();

    }
}

class SUV extends Car
{
    function getSuvName()
    {
        echo $this->name;
    }
}

$vinfastLuxA = new Car();
$vinfastLuxA->setName("Vinfast Lux A");
echo $vinfastLuxA->getName();
$vinfastLuxA->makeRunning();

