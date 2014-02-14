<?php 
include ("conexion.php");

$consulta= mysql_query(" select * from datos ");
while($filas= mysql_fetch_array($consulta)){
	$ruta=$filas['ruta'];

 ?>
 
 <?php echo $desc; ?>
 <table width="200" border="1">
   <tr>
     <td><ins><img src="<?php echo $ruta;?>" width="180" height="214"></ins></td>
   </tr>
 </table>
 <br>
     
     
 <?php } ?>
 