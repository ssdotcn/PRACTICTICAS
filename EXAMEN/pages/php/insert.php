<?php

$nom = strtoupper($_POST['nomA']);
$fec = $_POST['fecA'];
$edad = $_POST['edA'];
$esc = strtoupper($_POST['escA']);
$prom = $_POST['prmA'];
$mun = $_POST['munA'];
$sert = $_POST['srtA'];

$imgtmp = $_FILES['img']['tmp_name'];

include 'conexion.php';
$sql = $cxn->prepare("INSERT INTO aspitantes (nomA,fecA,edA,escA,prmA,munA,srtA,urlA) VALUES(?,?,?,?,?,?,?,?);");

if($_FILES['img']['name'] != ''){
	//$id = $cxn->query("SELECT MAX(idA) AS id FROM aspitantes;");
	//$a = $id->fetchAll(PDO::FETCH_OBJ);
	//$a=mysql_fetch_array($id);
	///$id->store_result();
	///$id->bind_result($iid);
    //echo $datos->id;
	//$urlimg = "../img/".($a["id"]+1).".png";
	//echo $iid;
	$urlimg = "../img/".$nom."".$fec."".$edad."".$esc."".$mun.".png";
	//echo $urlimg;
	move_uploaded_file($imgtmp, $urlimg);
	$isrt = $sql->execute([$nom,$fec,$edad,$esc,$prom,$mun,$sert,$urlimg]);

} else {
	$isrt = $sql->execute([$nom,$fec,$edad,$esc,$prom,$mun,$sert,NULL]);

}

if ($isrt == TRUE) {
	header("location:../forms/formulario.php");
}

?>


<?php
/*
$nom = strtoupper($_POST['nomA']);
$fec = $_POST['fecA'];
$edad = $_POST['edA'];
$esc = strtoupper($_POST['escA']);
$prom = $_POST['prmA'];
$mun = $_POST['munA'];
$sert = $_POST['srtA'];

$imgtmp = $_FILES['img']['tmp_name'];

//echo $_FILES['img']['name'];

include 'conexion.php';
$sql = $cxn->prepare("INSERT INTO aspitantes (nomA,fecA,edA,escA,prmA,munA,srtA,urlA) VALUES(?,?,?,?,?,?,?,?);");

if($_FILES['img']['name'] != ''){
	$id = $cxn->query("SELECT MAX(idA) as id FROM aspitantes;");
	$a = $id->fetchAll(PDO::FETCH_OBJ);
	foreach ($a as $datos) {
		$urlimg = "../img/".($datos->id+1).".png";
	}
	//intval($id);
	//echo'<script type="text/javascript"> alert("IMAGEN GUARDADA"); </script>';
	move_uploaded_file($imgtmp, $urlimg);
	$isrt = $sql->execute([$nom,$fec,$edad,$esc,$prom,$mun,$sert,$urlimg]);
} else {
	$isrt = $sql->execute([$nom,$fec,$edad,$esc,$prom,$mun,$sert,NULL]);

}

if ($isrt == TRUE) {
	header("location:../forms/formulario.php");
}
*/
?>
