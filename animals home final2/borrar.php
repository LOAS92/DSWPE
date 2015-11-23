<html>
<head>
</head>
<body>
<?php 
   include("conexion3.php"); 
   $link=Conectarse(); 
   $im=$_GET['imagen'];
//   echo "el valor es : $id";  
   mysql_query("delete from fotos where imagen = '$im'",$link); 
   header("Location: control_usu.php"); 
?> 
</body>
