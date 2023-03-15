<?php

$id = $_GET['idA'];
$url = $_GET['urlA'];

if ($url != '') {
	unlink($url);
}

include 'conexion.php';
$sql = $cxn->prepare("delete from aspitantes where idA = ?;");
$dlt = $sql->execute([$id]);

if ($dlt == TRUE) {
	header("location:../tables/lista.php");
}

?>