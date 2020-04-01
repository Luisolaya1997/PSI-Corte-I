<?php

include '../conexion.php';
$cod = $_POST['cod'];
$nom = $_POST['nom'];
$gen = $_POST['gen'];
$dir = $_POST['dir'];
$fec = $_POST['fec'];

$insersion = $con->query("insert into Estudiante(cod,nom,gen,dir,nam) values ('$cod','$nom','$gen','$dir','$fec')");


if($insersion){
	$msj = "Insersion Exitosa";
}else{
	$msj = "No se Inserto ".mysqli_error($con);
}
header('Location: index.php?msj='.$msj);


?>

