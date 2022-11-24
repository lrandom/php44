<?php
spl_autoload_register(function ($class_name) {
    //$className = App\Controllers\PostController
    $pathToFile = str_replace('\\', DIRECTORY_SEPARATOR,
        $class_name);
    //pathToFile = App/Controllers/PostController
    $pathToFile = $pathToFile . '.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . $pathToFile;
});

use App\Controllers\PostController as PostController;
use App\Models\User as User;

$postController = new PostController();
$postController->index();

$user = new User();
var_dump($user->getList());
?>