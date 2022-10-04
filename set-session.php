<?php
session_start();
$_SESSION['name'] = 'John';
$_SESSION['age'] = 30;
echo 'Session is set';