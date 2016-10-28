<?php

$usuario = $_POST['nnombre'];
$clave = $_POST['npassword'];

if(empty($usuario) || empty($clave)){
	header("Location: index.html");
	exit();
}

mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('bd_farmacia') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from usuario where usuario='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
	if($row['clave'] ==  $clave){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: admin.php");
	}else{
		header("Location: index.html");
		exit();
	}
}else{
	header("Location: index.html");
	exit();
}


?>