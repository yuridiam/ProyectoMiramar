<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$BD = "abarrotes";
$conn = new mysqli($servidor, $usuario, $password, $BD);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//mysqli_set_charset($conexion, "UTF8");

//mysqli_select_db($conexion,$BD);


?>