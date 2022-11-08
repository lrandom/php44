<?php

 class Parent1{

    final function abc()
    {
        echo 'abc';
    }

}

class Children1 extends Parent1
{

}

$obj = new Children1();
$obj->abc();