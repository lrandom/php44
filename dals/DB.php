<?php

class DB
{
    var $connect = null;

    public function __construct()
    {
        //mở kết nối đến DB
        $this->connect = mysqli_connect("127.0.0.1",
            "root", "koodinh@", "php_web_44");
    }
}