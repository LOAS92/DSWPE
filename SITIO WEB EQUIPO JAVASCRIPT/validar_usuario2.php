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
        
      $_SESSION['k_username']=$row['id_usuario']; 
	  echo"nombre=".$_SESSION['k_username']."<br>";
	  if($row['tipo']==0)
       {
	      header("Location:insert_foto.php");
	   }
	    if($row['tipo']==1)
       {
	      header("Location:inicio_adm.php");
	   }
	   
       
   }
   else{

     //error de password
     header("Location:inicio2.php");
    }

}
else{

    //error de usuario
    header("Location:inicio2.php");
}

?>





