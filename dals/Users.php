<?php
require_once 'DB.php';

class Users extends DB
{
    public function __construct()
    {
        //gọi đến constructor ở lớp cha
        parent::__construct();
    }

    public function getList()
    {
        $rs = mysqli_query($this->connect, "SELECT * FROM users");
        $data = [];
        while ($row = mysqli_fetch_object($rs)) {
            //$data[] = $row;
            array_push($data, $row);
        }
        return $data;
    }

    public function add($payload)
    {
        $fullName = $payload['full_name'];
        $address = $payload['address'];
        $phone = $payload['phone'];
        $age = $payload['age'];

        $sql = "INSERT INTO users(full_name,address,phone,age) VALUES('$fullName','$address','$phone',$age)";
        mysqli_query($this->connect, $sql);
    }

}