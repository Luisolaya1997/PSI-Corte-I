<?php

include 'conexion.php';
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$gen = $_POST['gen'];
$dir = $_POST['dir'];
$fec = $_POST['fec'];
$codOld = $_POST['codOld'];

$Actualizacion = $con->query("update Estudiante set cod='$cod', nom='$nom',gen='$gen', dir='$dir', nam='$fec' where cod='$codOld'");


if($Actualizacion){
	echo "Exito";
}else{
	echo "No se Actualizo ".mysqli_error($con);
}


?>

