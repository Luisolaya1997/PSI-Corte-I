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
	<h1>Formulario de insercion</h1>

	<div>

		<form action="insertar.php" method="POST">
		  <label for="cod">Codigo</label><br>
		  <input type="text" id="cod" name="cod" value=""><br>


		  <label for="name">Nombre</label><br>
		  <input type="text" id="name" name="nom" value=""><br>

		 <label for="gen">Genero</label><br>
		  <input type="text" id="gen" name="gen" value=""><br>

		  <label for="dir">direccion</label><br>
		  <input type="text" id="dir" name="dir" value=""><br>

		  <label for="fec">Fecha de Nacimiento</label><br>
		  <input type="text" id="fec" name="fec" value=""><br>


		  <input type="submit" value="Submit">
		</form> 
	</div>
	<div>
		<a href="index.php">Regresar</a>
	</div>
</body>
</html>
