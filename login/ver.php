<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="red">
<a href="admin.php"><img src="img/atra.png" width="100px"></a>
<br><br><br><br>

<center>
<h1>Listado de Usuarios</h1>
<?php

$server="localhot";
$usuario="root";
$contraseña="";
$bd="bd_farmacia";

$conexion=mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('bd_farmacia') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from usuario ");


echo'<table border="2" bgcolor=green>';
echo '<tr>';
echo '<th id="idusu">ID</td>';
echo '<th id="usuario">Usuario</td>';
echo '<th id="clave">Clave</td>';
echo '<th id="nombre">Nombre</td>';
echo '<th id="correo">Correo</td>';
echo '</th>';

while($extraido=mysql_fetch_array($result))

{
echo '<tr>';
echo '<td>'.$extraido['idusu'].'</td>';
echo '<td>'.$extraido['usuario'].'</td>';
echo '<td>'.$extraido['clave'].'</td>';
echo '<td>'.$extraido['nombre'].'</td>';
echo '<td>'.$extraido['correo'].'</td>';
echo '</th>';

}

mysql_close($conexion);

echo '</table>'; 
?>
</center>
</body>
</html>
