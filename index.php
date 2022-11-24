<?php
require_once __DIR__ . '/vendor/autoload.php';
use Root\Php44\Controllers\UserControllers as UserControllers;
use Mobile_Detect as Mobile_Detect;

$userController = new UserControllers();
$userController->index();
$mobile = new Mobile_Detect();
if ($mobile->isMobile()) {
    echo 'mobile';
} else {
    echo 'not mobile';
}