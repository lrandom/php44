<?php

abstract class AbMotor
{
    //non abstract method - pt bt
    function run()
    {
        echo 'run';
    }

    //abstract method - pt ab
    abstract function stop();
}

class Simson extends AbMotor
{
    function stop()
    {
        echo 'stop';
    }
}