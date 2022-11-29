<?php

namespace Root\Php44\Controllers;
class ProductControllers
{
    function list($id)
    {
        echo $id;
        $productModel = new \Root\Php44\Models\Products();
        $list = $productModel->list();
        $obj = 'abc';
        loadView('products/list.php', compact('list','obj'));
    }
}