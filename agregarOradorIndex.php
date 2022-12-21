<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

include("conexion.php");

$conexion = conexion();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$asunto = $_POST["asunto"];


$sql = "INSERT INTO oradores VALUES (NULL, '$nombre', '$apellido', '$asunto')";


$query = mysqli_query($conexion, $sql);


if($query) {
    Header("Location: index.php");
}


?>