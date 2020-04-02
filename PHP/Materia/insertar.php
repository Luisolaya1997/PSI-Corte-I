<?php

include '../conexion.php';
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$numC = $_POST['numC'];
$blo = $_POST['blo'];
$doc_cod = $_POST['doc_cod'];

$insersion = $con->query("insert into Materia(cod,nom,numC,blo,Doc_cod) values ('$cod','$nom','$numC','$blo','$doc_cod')");


if($insersion){
	$msj = "Insersion Exitosa";
}else{
	$msj = "No se Inserto ".mysqli_error($con);
}
header('Location: index.php?msj='.$msj);


?>
