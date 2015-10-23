<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INICIO</title>
<link href="css/principal.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/slider.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/formulario.css">
 
 
 
 <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
 <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>

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
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">CARRITO</span>
							<span class="sdt_descr">COMPRAS</span>
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
          
        <div id="contenedor">
           
           <div id="texto">
               
               <h5 class="titulo">
              ¡Bienvenido a la mejor tienda online en México!
               </h5>
               
               <p class="informacion">
                  "Tenemos el mejor servicio al cliente GARANTIZADO y cuidamos que todo sea segura para consentir a tus mascotas, conocenos y disfruta de esta nueva experiencia que te lo agradecera tu mascota."
                   
                                 
               </p>
           </div>
            
         <section class="contenedor slider">
         
        
        <ul id="slider" class="slider-wrapper">
            <li class="slide-current">
                
                <img src="imagenes/imagenes slider/2.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">AMIGOS</h3>
                    <P> SON LOS MEJORES AMIGOS EN EL MUNDO
                    </P>
                </div>
                
            </li>
            
              <li>
                
                <img src="imagenes/imagenes slider/3.jpg" alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">DARIAN LA VIDA POR TI</h3>
                    <P>POR QUE ELLOS TE DEMUESTRAN AMOR</P>
                </div>
                
            </li>
            
         <li>
                
                <img src="imagenes/imagenes slider/1.jpg"alt="slider imagen1">
                <div class="caption">
                    
                    <h3 class="caption-title">CERO RIVALIDAD</h3>
                    <P>NO HAY RIVALIDADES ENTRE ELLOS</P>
                </div>
                
            </li>
            
        
        </ul>
        
       <!-- controles-->
       <ul id="controles" class="controles">
             </ul>
      
       
    </section>   
            

    <div class="form">
      
      
      
      
        
        <div id="login"> 
         <ul class="tab-group">
        
        <li class="tab">INICAR SESION</li>
      </ul>  
          <h1>¡BIENVENIDO!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              USUARIO<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              CONTRASEÑA<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">REGISTRARME</a></p>
          
          <button class="button button-block"/>ACEPTAR</button>
          
          </form>    
    
    
    
</body>
</html>