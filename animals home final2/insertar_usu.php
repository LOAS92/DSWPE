<?php 
	if (! isset($_SESSION['usuario'])){
	header("Location: inicio.php");
	}
	$k = $_SESSION['usuario'];
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
   
     
	 
	 
	
   header("Location:exito.php"); 
   
 
 
?> 