<?php


class Database{
    protected $server_name = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $db_name = "ditari_db";

    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server_name,$this->username,$this->password,$this->db_name);

        if($this->conn->connect_error){
            die("Lidhja juaj me databaze ka deshtuar. Kjo eshte arsyeja: ".$this->conn->connect_error);
        }
    }
}