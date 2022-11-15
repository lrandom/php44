<?php
require_once 'DB.php';

class  UserDal extends DB
{

    public function getObjectByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = '$email' AND password ='$password'";
            $obj = $this->pdo->query($sql);
            return $obj->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exception) {
            return null;
        }
    }
}