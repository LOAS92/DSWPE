<?PHP
   include("conexion3.php"); 
   $link=Conectarse(); 
   $des=$_REQUEST['descripcion'];
   
   //para la imagen:
   $nombre=$_FILES['archivo']['name'];
   $ruta = "../proy/perros/".$_FILES['archivo']['name'];
		if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
			copy($_FILES['archivo']['tmp_name'],$ruta);
		}
		//echo "<img src='../DSWPE/perros/$nombre'><br>"; //para mostrar la imagen
   
   mysql_query("insert into fotos(imagen,descripcion) values('$nombre','$des')",$link); 
    
   header("Location: inserta_exito.php"); 
 
?> 