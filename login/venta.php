<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">	
	<title>Administracion</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body >
<div id="cabecera">
	<header>
	<center><h1>Ventas</h1></center>
		<nav>
			<ul>
				<li><a href="admin.php">Inicio</a> </li>
				<li><a href="#">Ventas</a> </li>
			
			</ul>
		</nav>
	</header>
</div>
<div id="contenido">
	<section>
		<article>
			<form action="registro.php">
Id Venta:<center><input type="text" name="txtidventa"> </center><br>
Fecha:<center><input type="text" name="txtfecha"> </center><br>
Id producto:<center><input type="text" name="txtidproducto"></center> <br> Cantidad:<center><input type="text" name="txtcantidad"></center> <br>
Total:<center><input type="text" name="txttotal"></center> <br>
<br>
<input type="submit" value="Registrar" 	name="btnregistrar">

</form>
		</article>
		<article>
<input type="submit" value="Registrar" 	name="btnregistrar">			
		</article>
		<article>
			
		</article>
<article>
			
		</article>
	</section>	
</div>
<div id="pie">
	<footer>
		<p>&copy; Emergentes 2016</p>
	</footer>
</div>
</body>
</html>