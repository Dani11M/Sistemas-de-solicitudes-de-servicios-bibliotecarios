<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
	<link rel="stylesheet" href="css/hoja_inicio.css">
	<link rel="shortcut icon" href="https://www.kindpng.com/picc/m/101-1010931_book-black-opened-pages-libro-animado-negro-hd.png">

	<title></title>
</head>
	
	<script type="text/javascript">
		$(function(){

			$("#slider div:gt(0)").hide();

			setInterval(function(){
				$("#slider div:first-child").fadeOut(1000)
				.next("div").fadeIn(1000)
				.end().appendTo("#slider");
			},3000);

		})

	</script>
<body>


	<div id="ContInicio">
		

			<div id="titulo">
				<h1>INICIO</h1>
			</div>
		
		
				<div><img src="biblioteca/img_l/img2.jpg" width="900" height="200"></div>
				
				
		

			<div id="section">
				<div id="article1">
					<img src="biblioteca/img_l/img3.jpg" width="200" height="200">
					<h1>¿Quiénes somos?</h1>
					<p>
						Somos estudiantes de Ucompensar con el objetivo de crear un servicio web bibliotecario completamente funcional y práctico para las utilidades del usuario. Contáctanos para conocer al equipo de trabajo y con nosotros podrás resolver cualquier inquietud.
					</p>
				</div>

				<div id="article2">
					<img src="biblioteca/img_l/img4.png" width="200" height="200">
					<h1>¿Qué es y cómo funciona nuestro software?</h1>
					<p>
						Primordialmente, debemos tener en cuenta que una biblioteca virtual es una plataforma la cual proporciona contenido y necesarias para cualquier amante de la lectura. Tiene múltiples beneficios, uno de ellos es que no existen horarios de entrada ni cierre.
					</p>
				</div>
			</div>

	</div>



</body>
</html>