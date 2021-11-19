<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css_l/hoja_librosreservadobi.css">
</head>
<body>

<script type="text/javascript">
		$(function ListarDefault(){
			var parametros = {
			"dbusqueda": $("#txtbusqueda").val()
			};

			$.ajax({
			data: parametros,
			url: 'listarLibrosReservadosBi.php',
			type: 'POST',
			beforeSend: function(){
			$("#ListaLRSBi").html("Procesando")
			},
			success: function(datos){
			$("#ListaLRSBi").html(datos);
			}
			});


			})


			function imprSelec(nombre) {
			  var ficha = document.getElementById(nombre);
			  var ventimp = window.open(' ', 'popimpr');
			  ventimp.document.write( ficha.innerHTML );
			  ventimp.document.close(); 
			  ventimp.print( ); 
			  ventimp.close(); 

			}



</script>


	<div id="ContenidoLRSBi">
		
		<div id="DatosLRSBi">
			


			<div id="tablaLRSBi">
				
				<h1>Libros Reservados</h1>
				<div id="busqueda">



					<div id="BusquedaLRSBi">
					<input type="text" id= "txtbusqueda" name="" placeholder="Nro Carnet Lector">
					<button type="button" onclick="ListarLibrosReservadosBi();">Buscar</button>
					
					</div>

					
				</div>

				<div id="ListaLRSBi">
					
				</div>



			</div>


		</div>

	</div>




</body>
</html>