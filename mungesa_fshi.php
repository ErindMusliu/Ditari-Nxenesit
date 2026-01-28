<?php

include('classes/Mungesa.php');

$id = $_GET['id'];

$mungesa = new Mungesa();
$mungesa->fshi($id);
header("Location:mungesat.php");