<?php

session_start();

/*$nombre_img = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];
$tamano = $_FILES['foto']['size'];

if(($nombre_img== !NULL) && ($_FILES['foto']['size'] <= 500000)){
	
	if(($_FILES['foto']['type'] == "image/gif") || ($_FILES['foto']['type'] == "image/jpeg") || ($_FILES['foto']['type'] == "image/jpg") || ($_FILES['foto']['type'] == "image/png")){
		$directorio = $_SERVER['DOCUMENT_ROOT'].'/assets/images/users';
		move_uploaded_file($_FILES['foto']['tmp_name'],$directorio.$nombre_img);
	}else{
		echo "No se puede subir una imagen con ese formato";
	}
}else{
	if($nombre_img == !NULL){
		echo "Imagen muy grande";
	}
}*/

$target_dir = "assets/images/users/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["entrar"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["foto"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    	$dir=$target_file;
        echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$direccion = $_POST['dir'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$tipo_usuario = 'Empleado';
$eliminado = '0';
$foto = $dir;
$_SESSION["insertado"]=0;


include("conexion.php");
$sesion2 = $conn->query("SELECT * FROM usuarios WHERE nom = '$nombre'");

	if(mysqli_num_rows($sesion2)>0){
		$_SESSION["insertado"]=2;
		header("Location: empleados.php");
	}else{

		$sesion = $conn->query("INSERT INTO usuarios (nom, correo, pass, tipo_usuario, eliminado, edad, direccion, telefono, foto) VALUES ('$nombre', '$correo', '$password2', '$tipo_usuario', '$eliminado', '$edad', '$direccion', '$telefono', '$foto')");

		$_SESSION["insertado"]=1;
		header("Location: empleados.php");
	}

if(empty($nombre)){
		$_SESSION["insertado"]=0;
		header("Location: empleados.php");
}
?>
