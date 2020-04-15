<html>
<style>
	h1 {
		color:blue;
		text-align: center;
	}
	input[type=text] {
		width: 100%;
		padding: 12px 20px;
  	    margin: 8px 0;
  	    display: inline-block;
  	    border: 1px solid #ccc;
  	    border-radius: 4px;
  	    box-sizing: border-box;
	}
	input[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	div {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
	a:link, a:visited {
	  background-color: #f44336;
	  color: white;
	  padding: 14px 25px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	}

	a:hover, a:active {
	  background-color: green;
	}
</style>
<body>
	<h1>Formulario de de actualización</h1>
	<?php
	$cod_est = $_GET['cod_est'];
	$cod_mat = $_GET['cod_mat'];
	include '../conexion.php';
	$datos = $con->query("select * from matxest where est_cod='$cod_est' and mat_cod='$cod_mat'");

	if($matxest = $datos->fetch_assoc()){
		$estudiantes = $con->query("select cod,nom from Estudiante");
		$materias = $con->query("select cod,nom from Materia");
	?>

	<div>

		<form action="actualizar.php" method="POST">
			<input type="hidden" name="codOld_mat" value="<?php echo $cod_mat; ?>">
			<input type="hidden" name="codOld_est" value="<?php echo $cod_est; ?>">
		  <label for="est_cod">Estudiante</label><br>
		  <select id="est_cod" name="est_cod" >
		  	<option value="null"></option>
		  	<?php 
		  	while($estudiante = $estudiantes->fetch_assoc()){
		  		$sele = "";

		  		if($matxest['est_cod'] == $estudiante['cod']){
			  		$sele = "selected";
			  	}
		  		echo "<option value='".$estudiante['cod']."' $sele>".$estudiante['nom']."</option>";
		  		
		  	}
		  	?>
		  </select><br>

		  <label for="mat_cod">Materia</label><br>
		  <select id="mat_cod" name="mat_cod" >
		  	<option value="null"></option>
		  	<?php 
		  	while($materia = $materias->fetch_assoc()){
		  		$sele = "";
		  		if($matxest['mat_cod'] == $materia['cod']){
			  		$sele = "selected";
			  	}
		  		echo "<option value='".$materia['cod']."' $sele>".$materia['nom']."</option>";
		  	
		  	}
		  	?>
		  </select><br>

		  <label for="nota">Nota</label><br>
		  <input type="text" id="nota" name="nota" value="<?php echo $matxest['nota']; ?>"><br>


		  <input type="submit" value="Submit">
		</form> 
	</div>
	<?php
}
else{
	echo "<h3>el docente con codigo $codigo no existe</h3>";
}
	?>
	<div>
		<a href="index.php">Regresar</a>
	</div>
</body>
</html>