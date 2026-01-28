<?php

include('classes/Mungesa.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['data']) && !empty($_POST['data'])){
        $data = htmlspecialchars(strip_tags(trim($_POST['data'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Dates";
    }

    if(isset($_POST['ore']) && !empty($_POST['ore'])){
        $ore = htmlspecialchars(strip_tags(trim($_POST['ore'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Oreve";
    }

    if(isset($_POST['arsye']) && !empty($_POST['arsye'])){
        $arsye = htmlspecialchars(strip_tags(trim($_POST['arsye'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Notes";
    }

    if(isset($_POST['nxenesi']) && !empty($_POST['nxenesi'])){
        $nxenesi_id = htmlspecialchars(strip_tags(trim($_POST['nxenesi'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Nxenesit";
    }

    if(count($error) > 0){
        foreach($error as $e){
            echo $e."<br>";
        }
    }

    else{
        $mungesat = new Mungesa();
        $mungesat->shto_mungesat($nxenesi_id,$data,$ore,$arsye);
        header("Location:mungesat.php");
    }
}