<?php 

include ("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$user = $_POST['usuario'];
$password = $_POST['password'];

$query = "INSERT INTO usuarios(nombre, apellido, usuario, password) VALUES('$nombre', '$apellido', '$user', '$password')";

if(mysql_query($query))$q=1;
else $q=0;

if($q==1){
		$result = mysql_result($q, 0);
		echo "Usuario registrado";
		header("Location: login.html");
} else
		echo "El usuario no se pudo registrar";


?>