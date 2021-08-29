<?php


require 'conexion.php';
include 'nav.php';
var_dump($query);

if (isset($_GET['id'])){
$id = $_GET['id'];
$query = "DELETE  FROM Propiedad WHERE id = $id";


$result = mysqli_query($conexion, $query);

//header("Location: tabla_propiedad.php");
//die();

echo "<script type='text/javascript'>document.location = 'tabla_propiedad.php';</script>";


}



?>