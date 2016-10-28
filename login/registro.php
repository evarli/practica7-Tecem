<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">	
	<title></title>
	
</head>
<body>
<?php
$server="localhost";
$usuario="root";
$contraseña="";
$bd="bd_farmacia";
$conexion=mysqli_connect($server,$usuario,$contraseña,$bd)or die("error en la conexion");

	$idpro=$_POST['txtidp'];
	$descripcion=$_POST['txdesc'];
	$costo_unit=$_POST['txtcostu'];
	$cantidad=$_POST['txtcant'];
	$stock_minimo=$_POST['txtstk'];
	$idcat=$_POST['txtcatg'];
	$insert="INSERT into productos values ('$idpro','$descripcion','$costo_unit','$cantidad','$stock_minimo','$idcat')";
$resul = mysqli_query($conexion, $insert)or die("error al insertar");
mysqli_close($conexion);
echo "datos insertados";

?>
</body>
</html>
