<?php

class DB
{
    protected $pdo = null;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=php_web_44;charset=utf8', 'root', 'koodinh@');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

}