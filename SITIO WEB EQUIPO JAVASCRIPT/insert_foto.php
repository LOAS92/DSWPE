
<!DOCTYPE html>
<html lang="en">
<head>
 <meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
	<link rel="stylesheet" href="css/responsiveslides.css" />  
	
	<script language="javascript">

	function pregunta(){
		var verificar = true;
		var expRegDescripcion=/^[0-9a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/; 

		var formulario = document.form1;
		var descripcion = document.form1.descripcion;
		var imagen = document.form1.archivo;
		
		
	if (!descripcion.value)
		{
		alert("el campo Descripcion es requerido ");
		descripcion.focus();
		verificar = false ;
		}
		else if (descripcion.value.length > 200)
		{
		
		alert("el campo Descripcion no puede tener mas de 200 caracteres ");
		descripcion.focus();
		verificar = false ;
		
		}
		else if (!expRegDescripcion.exec(descripcion.value))
		{
		 alert("el campo Descripcion solo acepta letras, numeros y espacios en blanco");
		 descripcion.focus()
		 verificar = false;
		}
		else if (!imagen.value)
		{
		alert("No has seleccionado la imagen del libro ");
		imagen.focus();
		verificar = false ;
		}
<!--- --------------------------------------------------------------------------->
		if(verificar==true)
		{
		alert("¿Está seguro de que quiere guardar la información?");
		 
		document.form1.submit()
		}


		}
		
		
	
	</script>
	

</head>
<body id="page1">				  
	<section id="content">
	  <div class="zerogrid">
		
				<div class="row">
				  
				  <br>
					<h2 align="justify" class="Estilo12">Este apartado es para que agregues libros a tu cuenta personal</h2>
					<FORM ACTION="carga_foto.php" method="post" enctype="multipart/form-data" name="form1"> 
          <TABLE width="700" height="150"> 
		   				<TR> 
                            <TD class="tdate-1 Estilo19"><div align="left">Descripción: </div>
                            <TD class="tdate-1">
                              <div align="left">
                                <textarea name="descripcion" cols="50"></textarea>                            
                              </div>                            </TR>
                        <TR>
                            <TD class="tdate-1"><div align="left"><span class="Estilo15">Foto de su mascota(.jpg .png):</span></div></TD>
                            <TD class="tdate-1">
                              <div align="left">
                                <input name="archivo" type="file" class="Estilo11" id="archivo" required>
                              </div></TD>
                        </TR>
                      </TABLE> 
                            
                      <br>
					  <input type =button class="title-1" onClick="pregunta()" value ="Enviar">
        
					</FORM>
					 
						
						
						
						
						<div align="justify"><span class="Estilo11">
						  </span></div>
						<span class="Estilo9"><article class="Estilo1"></article>
					</span><span class="Estilo8">
					</span><span class="Estilo6">
					</span><span class="Estilo1">
					</span>
					<article class="Estilo1"></article>
					
					<article class="Estilo1"></article>
					
					<article class="Estilo1"></article>
					
					<article class="Estilo1"></article>
					<article class="col-1-3"></article>
		  </div>
	  </div>
		</div>
	</section>
</body>
</html>