<?php

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
include("conexion.php");

$sesion = $conn->query("SELECT * FROM usuarios WHERE correo = '$email' AND pass = '$pass' AND eliminado=0");
	if($resultado = mysqli_fetch_array($sesion)){
		//$_SESSION['us']=$email;
		if(($resultado["tipo_usuario"] == "Administrador") || ($resultado["tipo_usuario"]=="Empleado")){
			$nombre = $resultado["nom"];
			$tipo = $resultado["tipo_usuario"];
			$img = $resultado["foto"];
			$_SESSION["nom"]=$nombre;
			$_SESSION["usu"]=$tipo;
			$_SESSION["avatar"]=$img;
			header("Location: dashboardadmin.php");	
		}else{
			echo "falló";
		}
		
	}else{
		header("Location: index.php");
		echo "no exito";
	}



?>