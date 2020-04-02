<?php
	include '../conexion.php';
	$cod = $_GET['cod'];
	
	$elim = $con->query("delete from Materia where cod='$cod'");

	if ($elim){
		$msj = "Eliminacion de $cod exitosa";
	}else{
		$msj = "No se elimino ". mysqli_error($con);
	}
	header('Location: index.php?msj='.$msj);

?>