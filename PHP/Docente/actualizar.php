<?php

include '../conexion.php';
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];
$fec = $_POST['fec'];
$codOld = $_POST['codOld'];

$Actualizacion = $con->query("update Docente set cod='$cod', nom='$nom',tel='$tel', fec='$fec' where cod='$codOld'");


if ($Actualizacion){
	$msj = "Actualizacion de $codOld exitosa";
}else{
	$msj = "No se Actualizo ". mysqli_error($con);
}
header('Location: index.php?msj='.$msj);


?>

