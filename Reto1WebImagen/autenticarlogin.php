<?php

include ("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND
	password = '".$password."'";

$q = mysql_query($query);

try {
	if (mysql_result($q, 0)) {
		$result = mysql_result($q, 0);
		header("Location: cargar.php"); 
} else
		echo "Verifique los datos de login";
} catch (Exception $error){}

?>

 