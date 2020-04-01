<?php

include '../conexion.php';
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];
$fec = $_POST['fec'];

$insersion = $con->query("insert into Docente(cod,nom,tel,fec) values ('$cod','$nom','$tel','$fec')");


if($insersion){
	$msj = "Insersion Exitosa";
}else{
	$msj = "No se Inserto ".mysqli_error($con);
}
header('Location: index.php?msj='.$msj);


?>
