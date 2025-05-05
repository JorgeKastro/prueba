<?PHP
	session_start();

	//vemos si el usuario y contrase�a es v�lido
	if ($_POST['username'] == "jorge@gmail.com" && $_POST['pass'] == "1234" ){	
	
		//usuario y contrase�a v�lidos - Crear variable para la sesi�n
		$_SESSION["autentificado"]= "si";
		$_SESSION["user"] = $_POST['username'] ;
		$_SESSION["pass"] = $_POST['pass'] ;
		header ("Location: index.php");	
	}else {
		//si no existe, ir a la P�gina de Inicio
		header("Location: login.php?error=si");
	}
?>

