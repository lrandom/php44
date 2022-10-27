<?php
session_start();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $_SESSION['form-username'] = $username;
}