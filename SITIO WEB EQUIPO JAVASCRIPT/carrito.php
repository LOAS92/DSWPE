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
											'cantidad'=>1,
											'talla'=>CH );
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
									'cantidad'=>1,
									'talla'=>CH );
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
<link rel="stylesheet" type="text/css" href="./css/estilo.css">
<script  type="text/javascript"  src="js/jquery-1.11.3.min.js"></script>
 <script type="text/javascript"  src="js/scripts1.js"></script>



</head>
<body>
	<header>
		<h1>Carrito de  compras</h1>
		<a href="./carrito.php" title="ver carrito de compras">
		 <img src="imagenes/carrito.jpg">
		</a>
	</hearder>	
<center> 		
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
			<span>Cantidad 
				<input type="text" value="<?php echo $datos[$i]['cantidad'];?>"
				data-precio="<?php echo $datos[$i]['precio'];?>"
				data-id="<?php echo $datos[$i]['id'];?>"
				class="cantidad">
			</span><br>
			<span>Talla: <input type="text" value="<?php echo $datos[$i]['talla'];?>"></span><br>
			<span class="subtotal">Subtotal: $<?php echo $datos[$i]['cantidad']*$datos[$i]['precio'];?></span><br>
			<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['id']?>">Eliminar</a>
		</center>
	</div>

<?php
	
	$total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
	}
	}else{
		echo '<center><h2>El carrito de compras esta vacio</h2></center>';
	}	
	echo '<center><h2 id="total">Total: $ '.$total.'</h2></center>';
	if($total!=0){
		echo '<center><a href="compras.php"  class="aceptar">comprar</a><br><br></center>';
	}
?>
 		<center><a href="./novedades.php">seguir comprando</a></center>    
 </section>   
 </center>   
    		
		
    
    
</body>
</html>