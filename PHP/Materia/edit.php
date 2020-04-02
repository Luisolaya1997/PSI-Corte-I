<html>
<style>
	h1 {
		color:blue;
		text-align: center;
	}
	input[type=text],select {
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
	$codigo = $_GET['cod'];
	include '../conexion.php';
	$datos = $con->query("select * from Materia where cod='$codigo'");

	if($materia = $datos->fetch_assoc()){
	$docentes = $con->query("select cod,nom from Docente");
	?>

	<div>

		<form action="actualizar.php" method="POST">
			<input type="hidden" name="codOld" value="<?php echo $codigo; ?>">
		  <label for="cod">Codigo</label><br>
		  <input type="text" id="cod" name="cod" value="<?php echo $materia['cod']; ?>"><br>


		  <label for="name">Nombre</label><br>
		  <input type="text" id="name" name="nom" value="<?php echo $materia['nom']; ?>"><br>

		 <label for="numC">Creditos</label><br>
		  <input type="text" id="numC" name="numC" value="<?php echo $materia['numC']; ?>"><br>

		  <label for="blo">Bloque</label><br>
		  <input type="text" id="blo" name="blo" value="<?php echo $materia['blo']; ?>"><br>

		  <label for="fec">Docente</label><br>
		  <select id="doc_cod" name="doc_cod" >
		  	<option value="null" selected></option>
		  	<?php 
		  	while($docente = $docentes->fetch_assoc()){
		  		$sele = "";
		  		if($materia['Doc_cod'] == $docente['cod']){
			  		$sele = "selected";
			  	}
		  		echo "<option value='".$docente['cod']."' $sele>".$docente['nom']."</option>";
		  	
		  	}
		  	?>
		  </select><br>


		  <input type="submit" value="Submit">
		</form> 
	</div>
	<?php
}
else{
	echo "<h3>el estudiante con codigo $codigo no existe</h3>";
}
	?>
	<div>
		<a href="index.php">Regresar</a>
	</div>
</body>
</html>