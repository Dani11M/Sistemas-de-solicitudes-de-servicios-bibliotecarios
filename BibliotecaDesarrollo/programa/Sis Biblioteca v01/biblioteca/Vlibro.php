<?php
	include("../dbconexion.php");

	$tabla = $cnmysql->query('SELECT * FROM libros');

	$NroLibros = mysqli_num_rows($tabla);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css_l/hoja_libro1.css">
<script type="text/javascript" src="js/funcioneslibro.js"></script>
</head>
<body>

<script type="text/javascript">
		$(function ListarDefault(){
			var parametros = {
			"dbusqueda": $("#txtbusqueda").val()
			};

			$.ajax({
			data: parametros,
			url: 'listarLibro.php',
			type: 'POST',
			beforeSend: function(){
			$("#ListaLi").html("Procesando")
			},
			success: function(datos){
			$("#ListaLi").html(datos);
			}
			});


			})
		</script>


	<div id="ContenidoLi">
		
		<div id="DatosLi">
			


			<div id="tablaLi">
				
				
				<div id="busqueda">

					<div id="NuevoLi">
					<button onclick="VNuevoLi();">Agregar Libro</button>

					</div>	

					<div id="BusquedaLi">
					<input type="text" id= "txtbusqueda" name="" placeholder="Buscar">
					<button type="button" onclick="ListarLibro();">Buscar</button>
					
					</div>

					
				</div>

				<div id="ListaLi">
					
				</div>


				
			</div>


		</div>

	</div>




</body>
</html>