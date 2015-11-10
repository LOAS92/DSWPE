<?php
session_start();
include "conexion.php";
$re=mysql_query("select * from usuario where id_usuario='".$_POST['usuario']."' AND 
 					password='".$_POST['password']."'")	or die(mysql_error());
	
	if(isset($re)){
		$_SESSION['usuario']=$re;
		header("Location: carrito.php");
	}else{
		header("Location: inicio.php?error=datos no validos");
	}
?>