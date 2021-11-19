<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">
		

			function imprSelec(nombre) {
			  var ficha = document.getElementById(nombre);
			  var ventimp = window.open(' ', 'popimpr'); 
			  ventimp.document.write( ficha.innerHTML ); 
			  ventimp.document.close(); 
			  ventimp.print( );
			  ventimp.close(); 

			}
	</script>
	

	
	<title></title>

	<link rel="stylesheet" type="text/css" href="css_l/hoja_librosPrestadosLector1.css">
</head>
<body>

<script type="text/javascript">
		$(function ListarDefault(){
			var parametros = {};

			$.ajax({
			data: parametros,
			url: 'listarlibrosprestadoslector.php',
			type: 'POST',
			beforeSend: function(){
			$("#ListaLPL").html("Procesando")
			},
			success: function(datos){
			$("#ListaLPL").html(datos);
			}
			});



		})



</script>


	<div id="ContenidoLPL">
		
		<div id="DatosLPL">
			


			<div id="tablaLPL">
				
				<h1>Mis Libros Prestados</h1>
				<div id="busqueda">
					

					
				</div>

				<div id="ListaLPL">
					
				</div>

			</div>


		</div>

	</div>




</body>
</html>