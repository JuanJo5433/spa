<?php
	$servername = "localhost";
	$database = "cliente";
	$username = "root";
	$password = "";
	// creando conexiones
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
		die("Conexion Error: ". mysqli_connect_error());
	}

	echo "<script type=\"text/javascript\">alert(\"Conectado Satisfactoriamente\"
	);</script>";
	

	// Tomando datos del formulario para luego ser enviados a la base de datos

		$usuario=$_POST["usuario"];
		$contrasena=$_POST["contrasena"];
		$correo_electronico=$_POST["correo_electronico"];

		// echo $correo_electronico
		// echo $usuario;
		// echo $contrasena;
	
	// Enviando datos a la base de datos (Mantenimiento) a la Tabla Clientes

	$sql = "INSERT INTO login (usuario, contrasena, correo_electronico) VALUES ('$usuario', '$contrasena', '$correo_electronico')";


	if (mysqli_query($conn, $sql)) {
		echo "<script type=\'text/javascript\">alert(\"Registro Guardado\");</script>";

	} else {
		echo "Error: ". $sql. "<br>". mysqli_error($conn);
	}
	mysqli_close($conn);
	// Permite que se envie la informacion y regrese al formulario de Ingreso de Clientes
	echo "<meta http-equiv='refresh' content='0; url=indexlogin.html'>"; //Content es el tiempo de espera 
?>