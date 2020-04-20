<html>
<style>
	h1 {
		color:blue;
		text-align: center;
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
	table {
	  border-collapse: collapse;
	  width: 100%;
	}

	th, td {
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even){background-color: #cceeff}

	th {
	  background-color: #4CAF50;
	  color: white;
	}
</style>
<body>
	<?php
		
		if(isset($_GET['msj'])){
			$msj= $_GET['msj'];
			echo "<script>alert('$msj');</script>";
		}
	?>
	<h1>Listado de Estudiantes</h1>
	<div>
		<a href="create.php">Crear </a>
	</div>

	<div>
		<table>
			<tr>
				<th>
					Codigo
				</th>
				<th>
					Nombre
				</th>
				<th>
					Genero
				</th>
				<th>
					Dirección
				</th>
				<th>
					Fecha de Nacimiento
				</th>
				<th>
					Acciones
				</th>
			</tr>
			<?php
				include '../conexion.php';

				$datos = $con->query("select * from Estudiante");

				while($dato = $datos->fetch_assoc()){
				?>
					<tr>
						<td>
							<?php echo $dato['cod']; ?>
						</td>
						<td>
							<?php echo $dato['nom']; ?>
						</td>
						<td>
							<?php echo $dato['gen']; ?>
						</td>
						<td>
							<?php echo $dato['dir']; ?>
						</td>
						<td>
							<?php echo $dato['nam']; ?>
						</td>
						<td>
							<a href="edit.php?cod=<?php echo $dato['cod']; ?>">Editar</a>
							<a href="eliminar.php?cod=<?php echo $dato['cod']; ?>">Eliminar</a>
							<a href="materia/index.php?cod=<?php echo $dato['cod']; ?>">Materias</a>
						</td>
					</tr>
				<?php 
				}
				 ?>
		</table>
	</div>
	<div>
		<a href="../index.php">Home</a>
	</div>
</body>
</html>


