<?PHP
	session_start();

	//vemos si el usuario y contrase�a es v�lido
	if ($_POST['usuario'] == "coquito" && $_POST['pass'] == "123" ){	
	
		//usuario y contrase�a v�lidos - Crear variable para la sesi�n
		$_SESSION["autentificado"]= "si";
		$_SESSION["user"] = $_POST['usuario'] ;
		$_SESSION["pass"] = $_POST['pass'] ;
		header ("Location: aplicacion.php");	
	}else {
		//si no existe, ir a la P�gina de Inicio
		header("Location: index.php?error=si");
	}
?>

