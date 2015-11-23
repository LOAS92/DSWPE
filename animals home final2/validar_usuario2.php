<?PHP session_start();
 $link=mysql_connect("localhost","root","");
 mysql_select_db("animals home",$link);

$usu=$_REQUEST['usuario'];
$pas=$_REQUEST['password'];

$result=mysql_query("select id_usuario,password,tipo from usuario where id_usuario='$usu'",$link);


if($row=mysql_fetch_array($result))
{
   if($row['password']==$pas)
   {
        
      $_SESSION['usuario']=$row['id_usuario']; 
	  echo"nombre=".$_SESSION['usuario']."<br>";
	  if($row['tipo']==0)
       {
	      header("Location:insert_foto2.php");
	   }
	    if($row['tipo']==1)
       {
	      header("Location:inicio_adm.php");
	   }
	   
       
   }
   else{

     //error de password
     header("Location:inicio2p.php");
    }

}
else{

    //error de usuario
    header("Location:inicio2u.php");
}

?>





