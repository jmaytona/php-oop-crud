<?php

class Database {
    public $con;
    public function __construct(){
        $this->con = mysqli_connect("localhost", "root", "", "php_oop");
        if($this->con){
            echo "Connection Success!";
        } else{
            echo "Error on Connection!";
        }
    }
}

$obj = new Database;

?>