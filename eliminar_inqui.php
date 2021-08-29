<?php

require 'conexion.php';
include 'nav.php';

if (isset($_GET['dni'])){
$dni = $_GET['dni'];
$query = "DELETE  FROM Inquilino WHERE dni = $dni";

$result = mysqli_query($conexion, $query);

//var_dump($query);
//header("Location: tabla_inqui.php");
//die();

echo "<script type='text/javascript'>document.location = 'tabla_inqui.php';</script>";


}



?>