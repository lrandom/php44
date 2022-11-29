<?php

require_once __DIR__ . '/vendor/autoload.php';
function loadView($path, $params)
{
    extract($params);
    require_once 'src/Views/' . $path;
}

//use Root\Php44\Controllers\ProductControllers;

//$productController = new ProductControllers();
//$className = 'Root\\Php44\\Controllers\\ProductControllers';
//$productControllers = new $className;
//$productControllers->list();
//$productControllers->{'list'}();

if (isset($_GET['ct'])) {
    $ct = $_GET['ct']; //product/list
    $ctArr = explode('/', $ct);  //['product','list']
    $className = 'Root\\Php44\\Controllers\\' . ucfirst($ctArr[0]) . 'Controllers'; //Root/Php44/Controllers/ProductControllers
    $objOfController = new $className;
    $objOfController->{$ctArr[1]}($ctArr[2]);
}

