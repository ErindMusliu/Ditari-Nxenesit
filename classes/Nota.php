<?php

require_once('Database.php');

class Nota extends Database{
    public function notat_nxenesit(int $nxenesi_id){
        $sql = "select * from where nxenesi_id='$nxenesi_id'";

        return $this->conn->query($sql);
    }

    public function shto_notat(int $nxenesi_id, string $lenda, int $nota, string $data){
        $sql = "insert into notat(nxenesi_id,lenda,nota,data) value('$nxenesi_id','$lenda','$nota','$data')";

        return $this->conn->query($sql);
    }

    public function fshi_noten(int $id){
        $sql = "delete from notat where id='$id'";
        
        return $this->conn->query($sql);
    }

    public mesatarjaENxenesit($nxenesi_id){}
}