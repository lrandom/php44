<?php
require_once 'DB.php';

class  ProductDal extends DB
{
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        return $this->pdo->query($sql);
    }

    public function getObjectById($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $obj = $this->pdo->query($sql);
        return $obj->fetch(PDO::FETCH_OBJ);
    }
}