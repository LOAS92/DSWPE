<?php
session_start();

include "conexion.php";
       $talla=$_GET['talla'];
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
		$re=mysql_query("select * from pedido order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysql_query("insert into pedido (numeroventa, imagen,nombre,precio,cantidad,talla,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['imagen']."',
				'".$arreglo[$i]['nombre']."',	
				'".$arreglo[$i]['precio']."',
				'".$arreglo[$i]['cantidad']."',
				'$talla',
				
				'".($arreglo[$i]['precio']*$arreglo[$i]['cantidad'])."'
				)")or die(mysql_error());
		}
		
	
		
		unset($_SESSION['carrito']);
		
		
	 
		
		header("Location: admin.php?mensaje=$numeroventa");

?>