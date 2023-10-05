<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Ejemplos </title>
		<style>
			html, body {
				font-family: arial;
				height: 100%;
			}
				
			body {
				margin: 0px !important;
				color: white;
				font-family: arial;
			}

			header {
				background-color: grey;
				overflow: auto;
				padding: 10px;
				text-align: center;
				font-weight: bold;
			}

			header h1 {
				text-align: center;
				color: pink;
			}

			.contenedor {
				min-height: 100%;
				position: relative;
				padding-bottom: 80px;				
			}

			.contenedor section {
				color: grey;
				margin-top: 20px;
				margin-right: 20px;
				margin-bottom: 20px;
				margin-left: 20px;
				padding: 10px;
				text-align: center;
				border: 1px solid black;
			}

			footer {
				background-color: grey;
				text-align: right;
				position: absolute;
				bottom: 0px;
				width: 100%; 
				padding: 10px;
				-webkit-box-sizing: border-box; 
				-moz-box-sizing: border-box;    
				box-sizing: border-box;      
			}

			/* INICIO HORIZONTAL NAV */

			nav.horizontal {
				background-color:grey;
				
			}

			nav.horizontal ul {
				list-style-type: none;
				padding: 5px;
				overflow: auto;
			}

			nav.horizontal ul li {
				float: left;
			}

			nav.horizontal ul li a {
				display: inline-block;

				background-color: white;
				color: grey; 
				font-weight: bold;
				text-decoration: none;

				padding: 10px;
				margin-right: 5px;
			}

			nav.horizontal ul li a:hover,
			nav.horizontal li.dropdown:hover .dropbtn {
				background-color: pink;
				color: white;
				text-shadow: 2px 2px 3px grey;
			}

			nav.horizontal .dropdown-content {
				display: none;
				position: absolute;
				background-color: grey;
				min-width: 160px;
				box-shadow: 3px 3px 10px rgb(131, 131, 131);
				z-index: 1;
			}

			nav.horizontal .dropdown-content ul li {
				float: none;
			}

			nav.horizontal .dropdown-content ul li a {
				display: block;
				margin-right: 0px;
				margin-bottom: 5px;
			}

			nav.horizontal .dropdown-content ul li:last-child a {
				margin-bottom: 0px;
			}

			nav.horizontal .dropdown:hover .dropdown-content {
				display: block;
			}

			/* FIN HORIZONTAL NAV */


			/* INICIO VERTICAL NAV */

			nav.vertical {
				background-color:grey;
				width: 15%;
			}

			nav.vertical ul {
				list-style-type: none;
				padding: 5px;
				overflow: auto;
			}

			nav.vertical ul li a {
				display: block;

				background-color: white;
				color: grey; 
				font-weight: bold;
				text-decoration: none;

				padding: 10px;
				margin-bottom: 5px;
			}

			nav.vertical ul li:last-child a {
				margin-bottom: 0px;
			}

			nav.vertical ul li a:hover,
			nav.vertical li.dropdown:hover .dropbtn {
				background-color: pink;
				color: white;
				text-shadow: 2px 2px 3px grey;
			}

			nav.vertical .dropdown-content {
				display: none;
			}

			nav.vertical .dropdown-content ul {
				padding-top: 0px;
				padding-right: 0px;
				padding-left: 15px;
				padding-bottom: 5px;
			}

			nav.vertical .dropdown:hover .dropdown-content {
				display: block;
			}

			/* FIN VERTICAL NAV */
		</style>
  	</head>

  	<body>
		<header>
			<h1>Mi P&aacute;gina</h1>
		</header>

		<nav class="horizontal">
			<ul>
				<li> <a href="#">Inicio</a> </li>
				<li> <a href="#seccion2">Qui&eacute;nes Somos</a> </li>
				<li class="dropdown"> 
					<a href="#seccion3" class="dropbtn">Nuestros Productos</a> 
					<div class="dropdown-content">
						<ul>
							<li> <a href="#">Producto 1</a> </li>
							<li> <a href="#">Producto 2</a> </li>
							<li> <a href="#">Producto 3</a> </li>
						</ul>
					</div>
				</li>
				<li> <a href="#seccion4">Contacto</a> </li>
			</ul>
		</nav>

		<!--
		<nav class="vertical">
			<ul>
				<li> <a href="#">Inicio</a> </li>
				<li> <a href="#seccion2">Quiénes Somos</a> </li>
				<li class="dropdown"> 
					<a href="#seccion3" class="dropbtn">Nuestros Productos</a> 
					<div class="dropdown-content">
						<ul>
							<li> <a href="#">Producto 1</a> </li>
							<li> <a href="#">Producto 2</a> </li>
							<li> <a href="#">Producto 3</a> </li>
						</ul>
					</div>
				</li>
				<li> <a href="#seccion4">Contacto</a> </li>
			</ul>
		</nav>
		-->

		<div class="contenedor">
			<section> 
				<h1>Ejemplo</h1>
				<p> Este es un ejemplo m&aacute;s de una secci&oacute;n b&aacute;sica de la p&aacute;gina. </p>
			</section>

			<footer>
				Copyleft 2023
				<br>
				Ejemplo de Sitio
				<br>
				<i>Manuel D&iacute;az</i>
			</footer>
		</div>
  	</body>
</html>