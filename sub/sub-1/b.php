<?php
$dir = __DIR__;
$dir = str_replace('/sub/sub-1', '/', $dir);
require_once $dir . 'sub-2/a.php';