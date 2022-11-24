<?php

namespace App\Controllers;

use App\Models\User as User;

class PostController
{
    public function index()
    {
        $user = new User();
        $data = $user->getList();
        var_dump($data);
        echo "This is index page";
    }
}