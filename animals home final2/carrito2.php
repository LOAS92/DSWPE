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
					$talla="";
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
											'cantidad'=>1);
											
											
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
									'cantidad'=>1);
									
									
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
<link href="css/catalogo/accesorios.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./css/boton.css">
<link  rel="stylesheet" type="text/css"   href="css/iconos.css"/>
<link rel="stylesheet" href="css/catalogo/reset.css">  
<link rel="stylesheet" href="css/catalogo/menuvertical.css">
 <script src="js/jquery-1.11.3.min.js"></script>
 <script src="js/main.js"></script>
 <script type="text/javascript"  src="js/scripts.js"></script>
 <script src="js/horizontal.js"></script>
 <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>



</head>
<body id="cuerpo">
    <div id="barra-logo">
        <div id="imagen-logo"></div>
          </div>
          <div id="menu">
              
              <ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="inicio_cliente.php">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">INICIO</span>
							<span class="sdt_descr">ANIMALS HOME</span>
						</span>
					</a>
				</li>
				<li>
					<a href="catalogo2.php">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">CATALOGO</span>
							<span class="sdt_descr">LO MEJOR PARA TU MASCOTA</span>
							
						</span>
					</a>
					</li>
				<li>
					<a href="novedades2.php">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">NOVEDADES</span>
							<span class="sdt_descr">PARA TODO EL AÑO</span>
						</span>
					</a>
					
				</li>
				<li>
					<a href="tallas2.php">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">TALLAS</span>
							<span class="sdt_descr">MIDE A TU MASCOTA</span>
						</span>
					</a>
				</li>
				
				<li>
					<a href="carrito2.php">
						<img src="images/7.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">CARRITO</span>
							<span class="sdt_descr">TUS COMPRAS</span>
						</span>
					</a>
					
				</li>
				<li>
					<a href="muestra_fotos2.php">
						<img src="images/9.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">COMPARTE</span>
							<span class="sdt_descr">MUESTRANOS A TU MASCOTA</span>
						</span>
					</a>
				</li>
				<li>
					<a href="contacto2.php">
						<img src="images/6.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">CONTACTO</span>
							<span class="sdt_descr">CONOCEME</span>
						</span>
					</a>
					
				</li>
			</ul>
		
                     <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>
              
              
              
          </div>
		  
		  
		  
		   <header>
		  <div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
		</div>
 
		<nav>
			<ul>
				<li><a href="inicio_cliente.php"><span class="icon-library"></span>Inicio</a></li>
				<li><a href="catalogo2.php"><span class="icon-files-empty"></span>Catalogo</a></li>
				<li><a href="novedades2.php"><span class="icon-cool"></span>Novedades</a></li>
				<li><a href="tallas2.php"><span class="icon-accessibility"></span>Tallas</a></li>
				<li><a href="muestra_fotos2.php"><span class="icon-exit"></span>Comparte</a></li>
				<li><a href="contacto2"><span class="icon-user-tie"></span>Contacto</a></li>
				<li><a href="salir.php"><span class="icon-user-tie"></span>Cerrar Sesion</a></li>
			</ul>
		</nav>
		</header>
				<script src="js/jquery-lates.js"></script>
				<script src="js/menu2.js"></script>
		
	<div id="contenedor">
		<center>
		<a href="carrito.php" title="ver carrito de compras">
			<center><img src="imagenes/carrito.jpg"></center>
		</a></center>
	
		<h1>Carrito de  compras</h1>
		
<center><section >

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
			</span><br>v
			<span>Talla:


			<input type="text"  name=""></span><br>
			<span class="subtotal">Subtotal: $<?php echo $datos[$i]['cantidad']*$datos[$i]['precio'];?></span><br>
			<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['id']?>">Eliminar</a>
		</center>
	</div>

<?php
	
	$total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
	}
	}else{
		echo '<center><h1>El carrito de compras esta vacio</h1></center>';
	}	
	echo '<center><br><br><h1 id="total">Total: $ '.$total.'</h1></center>';
	if($total!=0){
		echo '<center><a href="compras.php" class="button button-pe">comprar</a><br><br></center>';
	}
?>
 		<center><a href="./novedades2.php" class="button button-pe">seguir comprando</a></center>    

 </section>  </center> 
  
</div>
<div id="salida4">
		<a href="salir.php" class="button1 button-pe1">Cerrar Sesion</a>
        </div>
 
</body>
</html>