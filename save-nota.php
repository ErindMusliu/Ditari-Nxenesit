<?php

include('classes/Nota.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];

    if(isset($_POST['lenda']) && !empty($_POST['lenda'])){
        $lenda = htmlspecialchars(strip_tags(trim($_POST['lenda'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Lendes";
    }

    if(isset($_POST['nota']) && !empty($_POST['nota'])){
        $nota = htmlspecialchars(strip_tags(trim($_POST['nota'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Notes";
    }

    if(isset($_POST['data']) && !empty($_POST['data'])){
        $data = htmlspecialchars(strip_tags(trim($_POST['data'])));
    }

    else{
        $error[] = "Ju lutem plotesoni fushen e Dates";
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
        $notat = new Nota();
        $notat->shto_notat($nxenesi_id,$lenda,$nota,$data);
        header("Location:notat.php");
    }
}