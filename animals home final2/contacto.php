﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INICIO</title>
<link href="css/catalogo/accesorios.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>

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
					<a href="inicio.php">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">INICIO</span>
							<span class="sdt_descr">ANIMALS HOME</span>
						</span>
					</a>
				</li>
				<li>
					<a href="catalogo.php">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">CATALOGO</span>
							<span class="sdt_descr">LO MEJOR PARA TU MASCOTA</span>
							
						</span>
					</a>
					
				</li>
				<li>
					<a href="novedades.php">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">NOVEDADES</span>
							<span class="sdt_descr">PARA TODO EL AÑO</span>
						</span>
					</a>
					
				</li>
				<li>
					<a href="tallas.php">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">TALLAS</span>
							<span class="sdt_descr">MIDE A TU MASCOTA</span>
						</span>
					</a>
				</li>
				
				<li>
					<a href="carrito.php">
						<img src="images/7.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">CARRITO</span>
							<span class="sdt_descr">TUS COMPRAS</span>
						</span>
					</a>
					</li>
				<li>
					<a href="muestra_fotos.php">
						<img src="images/9.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">COMPARTE</span>
							<span class="sdt_descr">MUESTRANOS A TU MASCOTA</span>
						</span>
					</a>
				</li>
				<li>
					<a href="contacto.php">
						<img src="images/7.jpg" alt=""/>
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
          
<div id="contenedor"> <h5 class="titulo" align="justify">
  
  &nbsp; &nbsp; &nbsp; CONTACTANOS
  <div id="texto">
    </h5>
 <h1 align="center">
			    <strong>MISIÓN</strong></h1>
 <h2 class="titulo" align="justify">
« La misión de Animals home es mejorar la calidad y la venta de ropa para mascotas, estamos comprometidos a brindar un buen servicio. Esto lo lograremos con la mejora en la calidad y diseño de nuestros productos comprometiéndonos a potencializar la compra de ropa por internet para nuestras mascotas; proporcionando a nuestros clientes la satisfacción total y de nuestras mascotas. » </h2>
<h1 align="justify">
			    <strong>VISIÓN</strong></h1>
<h2 class="titulo" align="justify">
« La visión de este sitio web es ser  reconocidos como uno de los 3 mejores sitios web a nivel regional sobre accesorios para mascota. Con lo que nuestra empresa mejorará día con día con cada trabajo realizado y entregado satisfactoriamente. » </h2>
<center>	
		<table border"0">
		<td><h1 align="center">
			    <strong>Teléfonos:</strong><H2 align="center"><ul><li>01(222) 111 00 44</li><li>01(224) 112 00 55</li><li>01(226) 113 00 45</li></ul><br><br></H2></td>
		<td><h1 align="center">
			    <strong>Dirección:</strong><H2 align="center">Estamos en 5 de Mayo Col. Centro #4444.<br>En Horarios de 10:00 a 17:00 Lun-Vier<br>En Horarios de 09:00 a 13:00 Sab<strong><br><br><br></H2>
</td>
		<tr><td>
<h1 align="center">
			    <strong>Redes Sociales:</strong> <H2 align="center">>http://facebook.com/AnimalsHomeOficial<br>AnimalsHomeOficial@correo.com<br>AnimalsHomeOficial2@correo.com <BR><BR><BR> </td>
		</table><br>
	      <img src="images/Picture2.png" alt=""/> </H2>  
</center>
		 </div>
</body>
</html>