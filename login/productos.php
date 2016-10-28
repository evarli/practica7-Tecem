<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">	
	<title>Reg Prod</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div id="cabecera">
	<header>
	<center><h1>Registro de productos</h1></center>
		<nav>
			<ul>
				<li><a href="admin.php">Inicio</a> </li>
				<li><a href="#">Productos</a> </li>
				
			</ul>
		</nav>
	</header>

</div>
<div id="contenido">
	<section>
		
<form action="registro.php" method="POST">
		ID Producto:<input type="text" name="txtidp"><br><br>
		Descripcion:<input type="text" name="txdesc"><br><br>
		Costo Unit:<input type="text" name="txtcostu"><br><br>
		Cantidad:<input type="text" name="txtcant"><br><br>
		Stock:<input type="text" name="txtstk"><br><br>
		Categoria:<input type="text" name="txtcatg">
	<input type="submit" value="registra" name="btnregistrar">
		</form>
	
		
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