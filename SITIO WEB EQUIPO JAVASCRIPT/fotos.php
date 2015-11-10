<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FOTOS</title>
</head>
<body id="cuerpo">
este es la seccion en donde podra ver las fotos de nuestros clientes satisfechos por su compra.
<?PHP
///</h2
//<h2 class="Estilo2">
		$link =mysql_connect("localhost","root","");//conexion 
		mysql_select_db("animals home ",$link);//base de datos a utilizar
		
		$result=mysql_query(" select titulo,imagen,id_propietario from libros",$link); 
		if (!$result) { 
		die('Invalid query: ' . mysql_error()); 
		} 
?>
	
<table width="761" height="69" >
<tr>
<td ><div align="center"><span class="Estilo11">Titulo</span></div></td>
<td ><div align="center"><span class="Estilo11">Imagen</span></div></td>
<td ><div align="center" class="Estilo12"><span class="Estilo9">Propietario</span></div></td>

</tr>
<?PHP
while($row=mysql_fetch_array($result)) //row es para los renglones se extraen los elementos de la bd
{
$ti=$row['titulo'];
$im=$row['imagen'];
$di=$row['id_propietario'];
echo"<td><b><img src='/proy/images/perros/$im' width=70 height=70></b></td><td><b>$nombrec</td></b><td><b>$cu</b></td><td><b>$ho</b></td></tr>";

}

mysql_free_result($result);//limpia la bariable result
mysql_close($link); //close base de datos

?>

 </table>

</body>
</html>