<?php


require 'conexion.php';
include 'nav.php';

if (isset($_GET['dni'])){
$dni = $_GET['dni'];
$query = "DELETE  FROM propietario WHERE dni =$dni";

$result = mysqli_query($conexion, $query);

//header("Location: tabla_propietarios.php");
//die();

echo "<script type='text/javascript'>document.location = 'tabla_propietarios.php';</script>";

}

?>