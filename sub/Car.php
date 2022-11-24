<?php

class Car
{
    private $carName;

    /**
     * @param $carName
     */
    public function __construct($carName)
    {
        $this->carName = $carName;
    }


    function drive()
    {
        echo $this->carName . " driving";
    }
}