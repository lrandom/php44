<?php

class Animal
{
   var $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        echo "Init object";
        $this->name = $name;
    }

}

$tom = new Animal("Tom");
$jerry = new Animal("Jerry");