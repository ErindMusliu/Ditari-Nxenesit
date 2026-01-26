<?php

require_once('Database.php');

class Nxenesi extends Database{
    public function index(){
        $sql = "select * from nxenesit";

        return $this->conn->query($sql);
    }

    public function find(int $id){
        $sql = "select * from nxenesit where id='$id'";
        
        return $this->conn->query($sql);
    }

    public function shto_nxenesin(string $emri, string $mbiemri, string $klasa){
        $sql = "insert into nxenesit(emri,mbiemri,klasa) value('$emri','$mbiemri','$klasa')";

        return $this->conn->query($sql);
    }

    public function perditeso_nxenesin(int $id, string $emri, string $mbiemri, string $klasa){
        $sql = "update nxenesit set emri='$emri',mbiemri='$mbiemri',klasa='$klasa' where id='$id'";

        return $this->conn->query($sql);
    }

    public function fshi_nxenesin(int $id){
        $sql = "delete from nxenesit where id='$id'";

        return $this->conn->query($sql);
    }
}