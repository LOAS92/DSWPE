<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOVEDADES</title>
<link href="css/catalogo/catalogo.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/catalogo/slider.css" rel="stylesheet" type="text/css"/>
<link  rel="stylesheet" type="text/css"   href="css/iconos.css"/>

 <link rel="stylesheet" href="css/catalogo/reset.css">
  
 <link rel="stylesheet" href="css/catalogo/menuvertical.css">
 
 
 
 <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
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
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">INICIO</span>
							<span class="sdt_descr">ANIMALS HOME</span>
						</span>
					</a>
				</li>
				<li>
					<a href="catalogo.php">
						<img src="images/2.jpg" alt=""/>
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
				<li><a href="inicio.php"><span class="icon-library"></span>Inicio</a></li>
				<li><a href="catalogo.php"><span class="icon-files-empty"></span>Catalogo</a></li>
				<li><a href="novedades.php"><span class="icon-cool"></span>Novedades</a></li>
				<li><a href="#"><span class="icon-accessibility"></span>Tallas</a></li>
				<li><a href="#"><span class="icon-exit"></span>Comparte</a></li>
				<li><a href="#"><span class="icon-user-tie"></span>Contacto</a></li>
			</ul>
		</nav>
		</header>
				<script src="js/jquery-lates.js"></script>
				<script src="js/menu2.js"></script>
          
        <div id="contenedor">
       
               <div id="texto">
               <h5 class="titulo">
              ¡LA MEJOR ROPA POR TEMPORADA!
               </h5>
                       
       </div>
       
	   
	    <div id="menu-vertical">
          
            <h1 class="encabezado"><a href="novedades.php">NOVEDADES </a></h1>




<dl class="dropdown">
	<dt><a><span>PARA TODO EL AÑO</span></a></dt>
		<dd>
			<ul>
				<li><a class="default">NOVEDADES</a></li>
				<li><a href="primavera.php">PRIMAVERA</a></li>
				<li><a href="verano.php">VERANO</a></li>
				<li><a href="otono.php">OTOÑO</a></li>
				<li><a href="invierno.php">INVIERNO</a></li>
				<li><a href="patrias.php">FIESTAS PATRIAS</a></li>
				<li><a href="hallowen.php">HALLOWEN</a></li>
				<li><a href="navidad.php">NAVIDAD</a></li>
				
			</ul>
		</dd>
</dl>



     <h1 class="encabezado2"><a href="inicio.php">INICIO </a></h1>
	   
	    <script src="js/horizontal.js"></script>  

	   
        </div>
		
		           
          
					 <section class="contenedor slider">
         
        
        <ul id="slider" class="slider-wrapper">
            <li class="slide-current">
            
             <img src="imagenes/imagenes slider/10.jpg"  alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">PRIMAVERA</h3>
                    <P>LA MEJOR TENDENCIA DE ROPA PARA TU MASCOTA
                    </P>
                </div>
                
            </li>
            
			  <li>
                
                <img src="imagenes/imagenes slider/12.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">VERANO</h3>
                    <P>MIRA LO QUE TRAEMOS PARA TU MASCOTA ESTE VERANO!!!</p>
					</div>
                
            </li>
            <li>
                
                <img src="imagenes/imagenes slider/oto.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">OTOÑO</h3>
                    <P>PARA ESTA  EPOCA NO HAY  COMO ESTA  ROPA</P>
                </div>
                
            </li>
			
			
			<li>
			<img src="imagenes/imagenes slider/invierno.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">INVIERNO</h3>
                    <P>PARA QUE NO PASEN FRIOS</P>
                </div>
                
            </li>
            
            <li>
              <img src="imagenes/imagenes slider/11.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">FIESTAS PATRIAS</h3>
                    <P>PARA ESOS MOMENTOS EN LOS QUE NI LA MASCOTA PUEDE FALTAR!!!</p>
					</div>
                
            </li>

             <li>
                
                <img src="imagenes/imagenes slider/8.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">HALLOWEN</h3>
                    <P>LO MEJOR PARA ASUSTAR A TUS VECINOS </p>
					</div>
                
            </li>

            <li>
			
			<img src="imagenes/imagenes slider/navidad.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">NAVIDAD</h3>
                    <P>NO HAY COMO PASAR LA NAVIDAD JUNTO A ELLOS</P>
                </div>
                
            </li>
            
        
        </ul>
        
       <!-- controles-->
       <ul id="controles" class="controles">
             </ul>
      
       
    </section>   
            
          
          
          
          
          
          
          

		</div>
    
    
    
    
    
</body>
</html>