<?php

namespace Root\Php44\Models;
use \PDO;
class DB
{
    protected $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=php_43","root","koodinh@");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (Exception $exception) {
        }

    }
}