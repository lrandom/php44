<?php
session_start();
if (isset($_SESSION['name'])) {
    echo 'Session is set';
    echo "\n";
    echo $_SESSION['name'];
    echo "\n";
    echo $_SESSION['age'];
} else {
    echo 'Session is not set';
}