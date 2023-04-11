<?php
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
	include('conexion/config.php');
	date_default_timezone_set("America/Bogota");
	$sesionDesde   = date("Y-m-d H:i:A");

	//Evitar recibir las variables por metodo $_REQUEST['xxx'];
	//Limpiando variables para evitar inyeccion SQL
	$email = filter_var($_REQUEST['emailUser'], FILTER_SANITIZE_EMAIL);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailUser 	= ($_REQUEST['emailUser']);
	}
	$passwordUser   = trim($_REQUEST['passwordUser']);


	/*
	ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
	ALTER DATABASE MyDataBase COLLATE utf8_bin
	*/

	$sqlVerificandoLogin = ("SELECT IdUser, nameUser, emailUser, passwordUser  FROM myusers WHERE emailUser COLLATE utf8_bin='$emailUser'");
	$resultLogin = mysqli_query($con, $sqlVerificandoLogin) or die(mysqli_error($con));;
	$numLogin    = mysqli_num_rows($resultLogin);


	if ($numLogin != 0) {
		while ($rowData  = mysqli_fetch_assoc($resultLogin)) {
			$passwordBD = $rowData['passwordUser'];
			/**
			 * password_verify es una funcion de PHP que permite comprobar si la contraseña facilitada coincida con un hash, 
			 * retorna una respuesta de tipo booleano es decir (1 - 0) (TRUE - FALSE)
			 * ademas es capaz de encontrar la correspondencia entre cualquiera de los múltiples hash que puede generar password_hash 
			 */
			if (password_verify($passwordUser, $passwordBD)) {
				session_start(); //Creando la sesion ya que los datos son validos
				$_SESSION['IdUser'] 	= $rowData['IdUser'];
				$_SESSION['nameUser']	= $rowData['nameUser'];
				$_SESSION['emailUser'] 	= $rowData['emailUser'];

				//Actualizando la primera Hora del Login
				$Update = ("UPDATE myusers SET sesionDesde='$sesionDesde' WHERE emailUser='$emailUser' ");
				$resultado = mysqli_query($con, $Update);

				header("location:home.php?a=1");
			} else {
				//echo "Login incorecto";
				header("location:index.php?b=1");
			}
		}
	} else {
		//echo "No existe el correo registrado";
		header("location:./?e=1");
	}
}
