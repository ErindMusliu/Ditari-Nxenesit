<?php

include('classes/Nxenesi.php');

$id = $_GET['id'];

$nxenesi = new Nxenesi();
$nxenesi->fshi_nxenesin($id);
header("Location:nxenesit.php");