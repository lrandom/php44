<?php

namespace Root\Php44\Models;

use Root\Php44\Models\DB as DB;

class Products extends DB
{
    public function list()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}