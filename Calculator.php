<?php

class Calculator
{
    function add()
    {
        $totalArgs = func_num_args();
        switch ($totalArgs) {
            case 2:
                $arg1 = func_get_arg(0);
                $arg2 = func_get_arg(1);
                return $arg1 + $arg2;

            case 3:
                $arg1 = func_get_arg(0);
                $arg2 = func_get_arg(1);
                $arg3 = func_get_arg(2);
                return $arg1 + $arg2 + $arg3;
        }
    }
}

$calc = new Calculator();
echo $calc->add(1, 2);
echo $calc->add(2, 3, 4);