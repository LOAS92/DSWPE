<?php 
	session_start();
	if (! isset($_SESSION['usuario'])){
	header("Location: inicio.php");
	}
	$usu = $_SESSION['usuario'];
		
   include("conexion3.php"); 
   $link=Conectarse(); 
   $des=$_REQUEST['descripcion'];
   
   $nombre=$_FILES['archivo']['name'];
   $ruta = "../FINALEQUIPO/perros/".$_FILES['archivo']['name'];
		if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
			copy($_FILES['archivo']['tmp_name'],$ruta);
		}
		//echo "<img src='../DSWPE/perros/$nombre'><br>"; //para mostrar la imagen
   
   mysql_query("insert into fotos(imagen,descripcion,id_propietario) values('$nombre','$des','$usu')",$link); 
    
   header("Location: muestra_fotos2.php"); 
 
?> 