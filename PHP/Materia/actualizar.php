<?php

include '../conexion.php';
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$numC = $_POST['numC'];
$blo = $_POST['blo'];
$doc_cod = $_POST['doc_cod'];
$codOld = $_POST['codOld'];

$Actualizacion = $con->query("update Materia set cod='$cod', nom='$nom',numC='$numC', blo='$blo', Doc_cod='$doc_cod' where cod='$codOld'");


if ($Actualizacion){
		$msj = "Actualizacion de $codOld exitosa";
	}else{
		$msj = "No se Actualizo ". mysqli_error($con);
	}
	header('Location: index.php?msj='.$msj);


?>

