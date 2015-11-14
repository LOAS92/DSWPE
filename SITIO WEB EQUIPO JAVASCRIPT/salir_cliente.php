<?PHP session_start(); //DESTRUYE LA SESION Y TE REGRESA AL INICIO
		session_destroy();
		header("Location:inicio.php");
		?>