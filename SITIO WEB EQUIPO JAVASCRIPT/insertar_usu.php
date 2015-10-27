
<!DOCTYPE html>
<html lang="en">
<head>
 <meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
	<title>Home</title>
	<meta charset="utf-8">
	
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
<body id="page1">
	<section id="content">
		<div class="main">
			<div class="zerogrid">
				<div class="row">
				  <div class="wrap-col">
                    <h2>Insertar Profesor </h2>
					
                    <p>&nbsp;</p>
                    
					
					<br>
					<FORM ACTION="insertar_usu2.php" method="post" enctype="multipart/form-data" name="form1"> 
          <TABLE width="761" height="310"> 
                            <TR> 
                               <TD class="tdate-1">                                 <p align="left" class="Estilo15">Nombre de Usuario:</p></TD>
							    <TD class="tdate-1">                                 <p align="left" class="Estilo16">En este campo  se creara el nombre de usuario por ejemplo (loas92)</p></TD>
                               <TD class="tdate-1">                                 <p align="left"><textarea name="ususario" cols="50"></textarea>
									
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
					
</body>
</html>