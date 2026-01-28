<?php

require_once('Database.php');

class Nota extends Database{
    public function notat_nxenesit(){
        $sql = "select n.emri,n.mbiemri,n.klasa,no.id,no.lenda,no.nota,no.data,no.created_at,AVG(nota) as mesatarja from notat no inner join nxenesit n on no.nxenesi_id=n.id";

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

    public function mesatarjaENxenesit(int $nxenesi_id){
        $sql = "select AVG(nota) as mesatarja from notat where nxenesi_id='$nxenesi_id'";

        return $this->conn->query($sql);
    }
}