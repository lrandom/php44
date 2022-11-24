<?php

class Motor
{
    private $motorName;

    /**
     * @param $motorName
     */
    public function __construct($motorName)
    {
        $this->motorName = $motorName;
    }


    function drive()
    {
        echo $this->motorName . " driving";
    }
}