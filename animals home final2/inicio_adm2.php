<?PHP session_start();
if (! isset($_SESSION['usuario'])){
	header("Location: inicio.php");
}
$usu = $_SESSION['usuario'];


?>
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
  <script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
</head>
<body id="cuerpo">
    <div id="barra-logo">
        <div id="imagen-logo"></div>
          </div>
          <div id="menu">
              
              <ul id="sdt_menu" class="sdt_menu">
				<li> </li>
				<li> </li>
				<li>
					<a href="inicio_adm.php">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">INICIO</span>
							<span class="sdt_descr">ADMINISTRADOR</span>
						</span>
					</a>
				</li>
				<li>
					<a href="inicio_adm2.php">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">PEDIDOS</span>
							<span class="sdt_descr">VER LOS PEDIDOS</span>
						</span>
					</a>
				</li>
				<li> 
				    <a href="control_usu.php">
						<img src="images/10.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">ELIMINAR</span>
							<span class="sdt_descr">REGISTROS DE FOTOS</span>
						</span>
					</a>
				</li>
				<li>
					<a href="salir.php">
						<img src="images/8.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">SALIR</span>
							<span class="sdt_descr">CERRAR SESIÓN</span>
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
			   <?php 
   include("conexion3.php"); 
   $link=Conectarse(); 
   $result=mysql_query("select *from pedido",$link); 
?> 
 <p class="informacion">
               <h4>"La siguiente tabla muestra los pedidos hechos por tus clientes."</h4><br><br>
               </p> <center>

   <TABLE BORDER=4 align="center"> 
      		  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">#VENTA</H3></TD>
                  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">FOTO</H3></TD> 
		  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">NOMBRE</H3></TD> 
		  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">$ PRECIO<BR>UNITARIO</H3></TD> 
		  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">CANTIDAD</H3></TD> 
		  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">TALLA</H3></TD>
		  <TD  bgcolor="#1B0A2A"><H3 ALING="CENTER">SUBTOTAL</H3></TD>
</TD> 
     </TR>  
<?php 
  while($row = mysql_fetch_array($result)) 
  { 
    $num=$row["numeroventa"];
    $im=$row["imagen"];
    $nom=$row["nombre"];
	$pre=$row["precio"];
	$can=$row["cantidad"];
	$tal=$row["talla"];
	$subtotal=$row["subtotal"];
	
   printf("<tr><td><center>%d</center></td><td><center><img src='/animals home final/imagenes/productos/$im' width=70 height=70></center></td><td><center>%s</center></td><td><center>%d</center></td><td><center>%d</center></td><td><center>%s</center></td><td><center>%d</center></td>
		   </tr>",$num,$nom,$pre,$can,$tal,$subtotal); 
   }
   mysql_free_result($result); 
   mysql_close($link); 
?> 
</table></center><br><br>
           
           <div id="texto">
               
               <h5 class="titulo">

           </div>   
        <script src="js/index.js"></script>  
 </div>       
 
    
</body>
</html>