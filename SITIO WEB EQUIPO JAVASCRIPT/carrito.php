<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if (isset($_GET['id'])){
				$arreglo=$_SESSION['carrito'];
				$encontro=false;
				$numero=0;
				for($i=0;$i<count($arreglo);$i++){
					if($arreglo[$i]['id']==$_GET['id']){
						$encontro=true;
						$numero=$i;
					}
				}
				if($encontro==true){
					$arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1;
					$_SESSION['carrito']=$arreglo;

				}else{
					$nombre="";
					$precio=0;
					$imagen="";
					$re=mysql_query("select * from productos where id=".$_GET['id']);
					while ($f=mysql_fetch_array($re)) {
						$nombre=$f['nombre'];
						$precio=$f['precio'];
						$imagen=$f['imagen'];	
					}
					$datosNuevos= array('id' =>$_GET ['id'],
											'nombre' =>$nombre,
											'precio' =>$precio,
											'imagen'=> $imagen,
											'cantidad'=>1 );
					array_push($arreglo, $datosNuevos);
					$_SESSION['carrito']=$arreglo;

				}
			}

	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where id=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];	
			}
			$arreglo[]= array('id' =>$_GET ['id'],
									'nombre' =>$nombre,
									'precio' =>$precio,
									'imagen'=> $imagen,
									'cantidad'=>1 );
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE HTML>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carrito de compras</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>


</head>
<body>
	<header>
		<h1>Carrito de  compras</h1>
		<a href="./carrito.php" title="ver carrito de compras">
		 <img src="./imagenes/carrito.jpg">
		</a>
	</hearder>	
		
<section>
<?php
	$total=0;
	if(isset($_SESSION['carrito'])){
		$datos=$_SESSION['carrito'];
		$total=0;
		for($i=0;$i<count($datos);$i++){

?>

	<div class="producto">
		<center>
			<img src="imagenes/productos/<?php echo $datos[$i]['imagen']; ?>"><br>
			<span><?php echo $datos[$i]['nombre']?></span><br>
			<span>Precio: $<?php echo $datos[$i]['precio'];?></span><br>
			<span>Cantidad <input type="text" value="<?php echo $datos[$i]['cantidad'];?>"></span><br>
			<span>Subtotal: $<?php echo $datos[$i]['cantidad']*$datos[$i]['precio'];?></span><br>
		</center>
	</div>

<?php
	
	$total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
		}
	}	else{
		echo '<center><h2>El carrito de compras esta vacio</h2></center>';
	}	
	echo '<center><h2>Total: $'.$total.'</h2></center>';
?>
 <center><a href="./novedades.php">seguir comprando</a></center>    
 </section>   
    
    
    
</body>
</html>