<html>
<style>
	h1 {
		color:blue;
		text-align: center;
	}
	input[type=text], select {
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
	<h1>Formulario de insercion</h1>
	<?php
		include '../conexion.php';
		$docentes = $con->query('select cod,nom from Docente');

	?>

	<div>

		<form action="insertar.php" method="POST">
		  <label for="cod">Codigo</label><br>
		  <input type="text" id="cod" name="cod" value=""><br>


		  <label for="name">Nombre</label><br>
		  <input type="text" id="name" name="nom" value=""><br>

		 <label for="numC">Creditos</label><br>
		  <input type="text" id="numC" name="numC" value=""><br>

		  <label for="blo">Bloques</label><br>
		  <input type="text" id="blo" name="blo" value=""><br>

		  <label for="doc_cod">Docente</label><br>
		  <select id="doc_cod" name="doc_cod" >
		  	<option value="null"></option>
		  	<?php 
		  	while($docente = $docentes->fetch_assoc()){
		  		echo "<option value='".$docente['cod']."'>".$docente['nom']."</option>";
		  	
		  	}
		  	?>
		  </select><br>


		  <input type="submit" value="Submit">
		</form> 
	</div>
	<div>
		<a href="index.php">Regresar</a>
	</div>
</body>
</html>
