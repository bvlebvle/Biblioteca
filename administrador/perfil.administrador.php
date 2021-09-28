
<?php
	session_start();
	
	print_r($_SESSION);

	if ($_SESSION['logged'] == true){
		echo "acceso permitido";
	} else {
		echo "acceso denegado";
		die();
	}
?>
<h1>Perfil admin</h1>
<a href="/logout.php">Logout</a>
