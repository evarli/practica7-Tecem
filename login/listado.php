<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="red">
<a href="admin.php"><img src="img/atra.png" width="100px"></a>
<br><br><center>
<h1>Listado de Producto</h1>

<?php

$server="localhost";
$usuario="root";
$contraseña="";
$bd="bd_farmacia";

$conexion=mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());

mysql_select_db('bd_farmacia') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from productos");

echo'<table border="2" bgcolor="green">';
echo '<tr>';
echo '<th id="idpro">ID</td>';
echo '<th id="descripcion">Descripcion</td>';
echo '<th id="costo_unit">Costo Unit</td>';
echo '<th id="cantidad">cantidad</td>';
echo '<th id="stock_minimo">stoc min</td>';
echo '</th>';
while($extraido=mysql_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$extraido['idpro'].'</td>';
echo '<td>'.$extraido['descripcion'].'</td>';
echo '<td>'.$extraido['costo_unit'].'</td>';
echo '<td>'.$extraido['cantidad'].'</td>';
echo '<td>'.$extraido['stock_minimo'].'</td>';
echo '</th>';
}
mysql_close($conexion);
echo '</table>'; 
?>
</center>

</body>
</html>
