<?php

include('classes/Nxenesi.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['emri']) && !empty($_POST['emri'])){
        $emri = htmlspecialchars(strip_tags(trim($_POST['emri'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Emri-t";
    }

    if(isset($_POST['mbiemri']) && !empty($_POST['mbiemri'])){
        $mbiemri = htmlspecialchars(strip_tags(trim($_POST['mbiemri'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Mbiemri-t";
    }

    if(isset($_POST['klasa']) && !empty($_POST['klasa'])){
        $klasa = htmlspecialchars(strip_tags(trim($_POST['klasa'])));

        if(strlen($klasa) < 2){
            $error[] = "Klasa duhet te jete se paku 2 karaktere";
        }
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Klases";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $nxenesi = new Nxenesi();
        $nxenesi->shto_nxenesin($emri,$mbiemri,$klasa);
        header("Location:nxenesit.php");
    }
}