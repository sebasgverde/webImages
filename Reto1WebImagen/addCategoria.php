<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("conexion.php");
$rutaEnServidor= 'imagenes';

$nomCategoria = $_POST['nombre'];

if (!file_exists($rutaEnServidor.'/'.$nomCategoria)) {
    mkdir($rutaEnServidor.'/'.$nomCategoria, 0777, true);
}

$query="INSERT INTO categorias (nombre) values ('".$nomCategoria."')";
$res = mysql_query($query);


if($res) {
	echo ' Insercion con exito';
	 }else{
	 echo 'No se pudo insertar';
	  }
          

?>
<p> 
   <a href="cargar.php" title="cargar">volver a cargar tus imagenes</a>
</p>
