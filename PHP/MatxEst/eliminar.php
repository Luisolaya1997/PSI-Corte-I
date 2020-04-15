<?php
	include '../conexion.php';
	$cod_est = $_GET['cod_est'];
	$cod_mat = $_GET['cod_mat'];
	
	$elim = $con->query("delete from matxest where mat_cod='$cod_mat' ");

	if ($elim){
		$msj = "Eliminacion de $cod exitosa";
	}else{
		$msj = "No se elimino ". mysqli_error($con);
	}
	header('Location: index.php?msj='.$msj);

?>