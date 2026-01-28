<?php

require_once('Database.php');

class Mungesa extends Database{
    public function mungesat_nxenesit(){
        $sql = "select n.emri,n.mbiemri,n.klasa,m.id,m.data,m.ore,m.arsye,m.created_at,SUM(ore) as total from mungesat m inner join nxenesit n on m.nxenesi_id=n.id";

        return $this->conn->query($sql);
    }

    public function shto_mungesat(int $nxenesi_id, string $data, int $ore, string $arsye){
        $sql = "insert into mungesat(nxenesi_id,data,ore,arsye) value('$nxenesi_id','$data','$ore','$arsye')";

        return $this->conn->query($sql);
    }

    public function fshi(int $id){
        $sql = "delete from mungesat where id='$id'";
        
        return $this->conn->query($sql);
    }

    public function totalOreMungese(int $nxenesi_id){
        $sql = "select SUM(ore) as total from mungesat where nxenesi_id='$nxenesi_id'";

        return $this->conn->query($sql);
    }
}