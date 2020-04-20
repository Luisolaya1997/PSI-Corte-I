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
		include '../../conexion.php';
		$estudiante = $_GET['cod'];
		$data = $con->query("select nom from Estudiante where cod='$estudiante'");
		$estu = $data->fetch_assoc();
		if(isset($_GET['msj'])){
			$msj= $_GET['msj'];
			echo "<script>alert('$msj');</script>";
		}
	?>
	<h1>Listado de Materias del estudiante <?php echo $estu['nom']; ?> </h1>
	<div>
		<a href="create.php?cod=<?php echo $estudiante; ?>">Crear </a>
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
					Creditos
				</th>
				<th>
					bloque
				</th>
				<th>
					Docente
				</th>
				<th>
					Acciones
				</th>
			</tr>
			<?php
				

				$datos = $con->query("select * from Materia as mat, matxest as mxe where mat.cod=mxe.mat_cod and mxe.est_cod=$estudiante");

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
							<?php echo $dato['numC']; ?>
						</td>
						<td>
							<?php echo $dato['blo']; ?>
						</td>
						<td>
							<?php echo $dato['Doc_cod']; ?>
						</td>
						<td>
							<a href="edit.php?cod=<?php echo $dato['cod']; ?>">Editar</a>
							<a href="eliminar.php?cod_est=<?php echo $estudiante; ?>&cod_mat=<?php echo $dato['cod']; ?>">Eliminar</a>
						</td>
					</tr>
				<?php 
				}
				 ?>
		</table>
	</div>
	<div>
		<a href="../index.php">Estudiantes</a>
	</div>
</body>
</html>


