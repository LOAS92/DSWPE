<?PHP 
session_start();
 $link=mysql_connect("localhost","root","");
 mysql_select_db("animals home",$link);

$usu=$_POST['usuario'];
$pas=$_POST['password'];



$result=mysql_query("select id_usuario,password,tipo from usuario where id_usuario='$usu'",$link);


if($row=mysql_fetch_array($result))
{
   if($row['password']==$pas)
   {
        
      $_SESSION['usuario']=$row['id_usuario']; 
	  echo"nombre=".$_SESSION."<br>";
	  if($row['tipo']==0)
       {
	      header("Location:inicio_cliente.php");
	   }else{
	    if($row['tipo']==1)
       {
	      header("Location:inicio_adm.php");
	   }
	   }
       
   }
   else{

     //error de password
     header("Location:errorloginc.php");
    }

}
else{

    //error de usuario
    header("Location:errorloginc2.php");
}

?>





