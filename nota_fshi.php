<?php

include('classes/Nota.php');

$id = $_GET['id'];

$nota = new Nota();
$nota->fshi_noten($id);
header("Location:notat.php");