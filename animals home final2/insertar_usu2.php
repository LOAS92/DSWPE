<?php 
	session_start();
	//echo"nombre=".$_SESSION['k_username']."<br>";
	if (! isset($_SESSION['k_username'])){
	header("Location: inicio.php");
	}
	$k = $_SESSION['k_username'];
	//---------------------------------------------------
	
   include("conexion3.php"); 
   $link=Conectarse(); 
    $mensaje=$_REQUEST['venta'];
   $us=$_REQUEST['ususario']; 
   $pas=$_REQUEST['password'];    
   $nom=$_REQUEST['nombre'];
   $pa=$_REQUEST['paterno'];
   $ma=$_REQUEST['materno'];
   $co=$_REQUEST['correo'];
   $di=$_REQUEST['direccion'];
   $te=$_REQUEST['telefono'];
   $ti=0;
   
   
  
   mysql_query("insert into usuario(id_usuario,password,tipo) values('$us','$pas','$ti')",$link); 
   
    mysql_query("insert into cliente(id_cliente,nombre,apellido_p,apellido_m,correo,direccion,telefono) values('$us','$nom','$pa','$ma','$co','$di','$te')",$link); 
   
     mysql_query("insert into invitado(id_usuario,numeroventa) values('$us','$mensaje')",$link);
	 
	 
	
   header("Location:admin1.php?mensaje=$mensaje &usuario=$us"); 
   
 
 
?> 