<?php

include '../conexion.php';
$est_cod = $_POST['est_cod'];
$mat_cod = $_POST['mat_cod'];
$nota = $_POST['nota'];
$codOld_est = $_POST['codOld_est'];
$codOld_mat = $_POST['codOld_mat'];

$Actualizacion = $con->query("update matxest set mat_cod='$mat_cod',nota='$nota' where mat_cod='$codOld_mat'");


if ($Actualizacion){
	$msj = "Actualizacion de $codOld exitosa";
}else{
	$msj = "No se Actualizo ". mysqli_error($con);
}
header('Location: index.php?msj='.$msj);


?>

