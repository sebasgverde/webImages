<?php 

/*
print_r($_FILES);
echo '<br>';
echo 'nombre de la imagen: ';
print_r($_FILES['imagen']['name']);


echo '<br>';
echo 'tipo de la imagen: ';
print_r($_FILES['imagen']['type']);
*/


/*echo '<br>';
echo 'ruta temporal de la imagen: ';
print_r($_FILES['imagen']['tmp_name']);*/


include ("conexion.php");

//$casa= substr(md5(uniqid(rand())),0,3);

$categ=$_POST['select'];

$categoriaId = "SELECT id_categorias FROM categorias WHERE nombre= '".$categ."'";
$id = mysql_fetch_array(mysql_query($categoriaId,$conexion));

echo $id['id_categorias'];


//$rutaEnServidor= 'C:\wamp\www\SubirImagenes\imagenes';
$rutaEnServidor= 'imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$categ.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);



$sql="INSERT INTO imagenes (ruta,id_categorias) values ('".$rutaDestino."', '".$id['id_categorias']."')";
$res= mysql_query($sql,$conexion);

if($res) {
	echo ' Insercion con exito';
	 }else{
	 echo 'No se pudo insertar';
	  }
	
	?>