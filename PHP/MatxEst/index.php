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
	<h1>Listado de la relacion entre estudiante con materia</h1>
	<div>
		<a href="create.php">Crear </a>
	</div>

	<div>
		<table>
			<tr>
				<th>
					Codigo estudiante
				</th>
				<th>
					codigo de la materia
				</th>
				<th>
					nota
				</th>
				<th>
					Acciones
				</th>
			</tr>
			<?php
				include '../conexion.php';

				$datos = $con->query("select est.nom as estudiante,mat.nom as materia, mxe.*  from matxest as mxe, Estudiante as est, Materia as mat where mxe.est_cod =est.cod and mxe.mat_cod=mat.cod");

				while($dato = $datos->fetch_assoc()){
				?>
					<tr>
						<td>
							<?php echo $dato['estudiante']; ?>
						</td>
						<td>
							<?php echo $dato['materia']; ?>
						</td>
						<td>
							<?php echo $dato['nota']; ?>
						</td>
						<td>
							<a href="edit.php?cod_est=<?php echo $dato['est_cod']; ?>&cod_mat=<?php echo $dato['mat_cod']; ?>">Editar</a>
							<a href="eliminar.php?cod_est=<?php echo $dato['est_cod']; ?>&cod_mat=<?php echo $dato['mat_cod']; ?>">Eliminar</a>
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


