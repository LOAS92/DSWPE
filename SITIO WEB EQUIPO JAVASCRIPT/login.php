<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INICIO</title>
<link href="css/principal.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/slider.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet" href="css/normal.css">
  <link rel="stylesheet" href="css/login.css">
 
 
 
 <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
 <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>

		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		
		

	<script language="javascript">
        function pregunta(){
		
		
		var verificar = true
		//var expRegnombreusua=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s\_\.-\@\0-9]+$; 
		var expRegpassword=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/; 
		var expRegnombre=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/; 
		var expRegpaterno=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/; 
		var expRegmaterno=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/; 
		var expRegcorreo=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		var expRegdireccion=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
		var expRegtelefono=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;	
		
		
		var formulario = document.form1;
		var nombreusua = document.form1.ususario;
		var contraseña = document.form1.password;
		var nombre = document.form1.nombre;
		var paterno = document.form1.paterno;
		var materno = document.form1.materno;
		var correo = document.form1.correo;
		var dir = document.form1.direccion;
		var tel = document.form1.telefono;
		
		
		
		
		if(!nombreusua.value)
		{
		alert("el campo Nombre de Usuario es requerido ");
		nombreusua.focus();
		verificar = false ;
		}
		else if (nombreusua.value.length > 20)
		{
		
		alert("el campo Nombre de Usuario  no puede tener mas de 20 caracteres ");
		nombreusua.focus();
		verificar = false ;
		
		}
		else if (!contraseña.value)
		{
		alert("el campo Password es requerido ");
		contraseña.focus();
		verificar = false ;
		}
		else if (contraseña.value.length > 10)
		{
		
		alert("el campo Password  no puede tener mas de 10 caracteres ");
		contraseña.focus();
		verificar = false ;
		
		}
		else if (!nombre.value)
		{
		alert("el campo Nombre es requerido ");
		nombre.focus();
		verificar = false ;
		}
		else if (!expRegnombre.exec(nombre.value))
		{
		 alert("el campo Nombre solo acepta letras y espacios en blanco");
		 nombre.focus()
		 verificar = false;
		}
		else if (nombre.value.length > 20)
		{
		
		alert("el campo Nombre   no puede tener mas de 20 caracteres ");
		nombre.focus();
		verificar = false ;
		
		}
		else if (!paterno.value)
		{
		alert("el campo Apellido Paterno es requerido ");
		paterno.focus();
		verificar = false ;
		}
		else if (!expRegpaterno.exec(paterno.value))
		{
		 alert("el campo Apellido Paterno solo acepta letras ");
		 paterno.focus()
		 verificar = false;
		}
		else if (paterno.value.length > 45)
		{
		
		alert("el campo Apellido Paterno  no puede tener mas de 45 caracteres ");
		paterno.focus();
		verificar = false ;
		
		}
		else if (!materno.value)
		{
		alert("el campo Apellido Materno es requerido ");
		materno.focus();
		verificar = false ;
		}
		else if (!expRegmaterno.exec(materno.value))
		{
		 alert("el campo Apellido Materno solo acepta letras ");
		 materno.focus()
		 verificar = false;
		}
		else if (materno.value.length > 45)
		{
		
		alert("el campo Apellido Materno no puede tener mas de 45 caracteres ");
		materno.focus();
		verificar = false ;
		
		}
		else if (!correo.value)
		{
		alert("el campo Correo es requerido ");
		correo.focus();
		verificar = false ;
		}
		else if (!expRegcorreo.exec(correo.value))
		{
		 alert("el campo Correo es incorrecto");
		 edicion.focus()
		 verificar = false;
		}
		else if (!dir.value)
		{
		alert("el campo Dirección es requerido ");
		dir.focus();
		verificar = false ;
		}
		else if (dir.value.length > 60)
		{
		
		alert("el campo Dirección no puede tener mas de 60 caracteres ");
		dir.focus();
		verificar = false ;
		}
		else if (!tel.value)
		{
		alert("El campo Telefono es requerido ");
		tel.focus();
		verificar = false ;
		} 
		else if (tel.value.length > 30)
		{
		
		alert("el campo Telefono  no puede tener mas de 10 caracteres ");
		tel.focus();
		verificar = false ;
		
		}
		
		
		
		
		if(verificar==true)
		{
		alert("¿Está seguro de que quiere guardar la información?");
		 
		document.form1.submit()
		}


		}
</script>
	
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	  
	<script src="js/tms-0.3.js" type="text/javascript"></script>
	<script src="js/tms_presets.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script src="js/responsiveslides.js"></script>
	
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
           
          
            
        
            

    <div class="form">
      
       <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
        <FORM ACTION="insertar_usu2.php" method="post" enctype="multipart/form-data" name="form1"> 
          <TABLE width="761" height="310"> 
                            <TR> 
                               <TD class="tdate-1"> <p align="left" class="Estilo15">Nombre de Usuario:</p></TD>
							    <TD class="tdate-1"><p align="left" class="Estilo16">En este campo  se creara el nombre de usuario por ejemplo (user92)</p></TD>
                               <TD class="tdate-1"><p align="left"><textarea name="ususario" cols="50"></textarea>
									
								</p></TD></TR> 
                            <TR> 
                               <TD class="tdate-1"><div align="left"><span class="Estilo15">Password:</span></div></TD> 
							   <TD class="tdate-1"><div align="left"><span class="Estilo16">En este campo  se creara tu Passwor de usuario por ejemplo (loas_gava*95)</span></div></TD> 
							   
                               <TD class="tdate-1">                                 <p align="left"><textarea name="password" cols="50"></textarea>
                                
								 </p></TD> 
                            </TR> 
                            <TR> 
                               <TD class="tdate-1"><div align="left"><span class="Estilo15">Nombre:</span></div></TD> 
                               <TD class="tdate-1">
                                 <div align="left">
                                   <textarea name="nombre" cols="50"></textarea>
                                 </div></TD> 
                            </TR>
                            <TR>
                            <TD class="tdate-1"><div align="left"><span class="Estilo15">Apellido Paterno:</span>
                            </div>
                            <TD class="tdate-1">
                              <div align="left">
                                <textarea name="paterno" cols="50"></textarea>                            
                              </div>                            </TR>
                            <TR>
                            <TD class="tdate-1"><div align="left"><span class="Estilo15">Apellido Materno:</span>
                            </div>
                            <TD class="tdate-1">
                              <div align="left">
                                <textarea name="materno" cols="50"></textarea>                            
                              </div>                            </TR>
							  <TR>
                            <TD class="tdate-1"><div align="left"><span class="Estilo15">correo:</span>
                            </div>
                            <TD class="tdate-1">
							<p>En este campo solo se aceptan correos electronicos(ejemplo@gmail.com/hotmail.com,etc)</p>
                              <div align="left">
                                <textarea name="correo" cols="50"></textarea>                            
                              </div>                            </TR>
							  <TR>
                            <TD class="tdate-1"><div align="left"><span class="Estilo15">Dirección:</span>
                            </div>
                            <TD class="tdate-1">
							<p>Por ejemplo(U.H.I. San bartolo Edif A int 1)</p>
                              <div align="left">
                                <textarea name="direccion" cols="50"></textarea>                            
                              </div>                            </TR>
							   <TR>
                            <TD class="tdate-1"><div align="left"><span class="Estilo15">Telefono:</span>
                            </div>
                            <TD class="tdate-1">
							<p>Por ejemplo 222(1234567)</p>
                              <div align="left">
                                <textarea name="telefono" cols="50"></textarea>                            
                              </div>                            </TR>
                            
                           
                           
                      </TABLE> 
                            
                      <br>
					  <input type =button class="title-1" onClick="pregunta()" value ="Guardar">
                        
                      
                      
                      <p>&nbsp;</p>
                            
					</FORM>
					

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    

        <script src="js/index.js"></script>

      
      
        
       
          </form>    
     </div>
	
    
    
    
</body>
</html>