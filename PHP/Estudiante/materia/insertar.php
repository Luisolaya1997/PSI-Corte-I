<?php

include '../../conexion.php';
$cod_est = $_POST['est_cod'];
$cod_mat = $_POST['mat_cod'];
$nota = $_POST['nota'];

$insersion = $con->query("insert into matxest(est_cod,mat_cod,nota) values ('$cod_est','$cod_mat','$nota')");


if($insersion){
	$msj = "Insersion Exitosa";
}else{
	$msj = "No se Inserto ".mysqli_error($con);
}
header('Location: index.php?cod='.$cod_est.'&msj='.$msj);


?>
