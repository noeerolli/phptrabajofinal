<?php


require 'conexion.php';
include 'nav.php';

if (isset($_GET['id_propiedad'])){
$id_propiedad = $_GET['id_propiedad'];
$query = "DELETE  FROM Contrato WHERE id_propiedad = $id_propiedad";

$result = mysqli_query($conexion, $query);

//header("Location: tabla_cont.php");
//die();

echo "<script type='text/javascript'>document.location = 'tabla_cont.php';</script>";


}



?>