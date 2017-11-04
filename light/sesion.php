<?php

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
include("conexion.php");

$sesion = $conn->query("SELECT * FROM usuarios WHERE correo = '$email' AND pass = '$pass' ");
	if($resultado = mysqli_fetch_array($sesion)){
		//$_SESSION['us']=$email;
		if(($resultado["tipo_usuario"] == "Administrador") || ($resultado["tipo_usuario"]=="Empleado")){
			$nombre = $resultado["nom"];
			$tipo = $resultado["tipo_usuario"];
			$_SESSION["nom"]=$nombre;
			$_SESSION["usu"]=$tipo;
			header("Location: dashboardadmin.php");	
		}else{
			echo "falló";
		}
		
	}else{
		header("Location: index.php");
		echo "no exito";
	}



?>