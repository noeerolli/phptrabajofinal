


<?php

require 'conexion.php';
include 'nav.php';

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$precio = $_POST['precio'];
$inquilino = $_POST['select-inquilino'];
$propietario= $_POST['select-propietario'];
$propiedad= $_POST['select-propiedad'];

$insertarContrato = "insert into Contrato (id_propietario, id_inquilino, fecha_inicio, fecha_fin, precio, id_propiedad)
values ($propietario, $inquilino, '$fecha_inicio', '$fecha_fin', $precio, $propiedad)";


$query = mysqli_query($conexion, $insertarContrato);


if($query){
 // header("Location:tabla_cont.php");
 
 echo "<script type='text/javascript'>document.location = 'tabla_cont.php';</script>";
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contrato</title>
<link rel="stylesheet" href="style_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<h3 id="title">Nuevo Contrato</h3>
<form action = "form_contrato.php" method ="POST" id=formlario_prop class="row g-3">

<select name="select-propietario" class="form-select" aria-label="Default select example">
  <option selected>Elija un propietario</option>
  <?php
   $traer_propietarios = "SELECT dni, nombre FROM propietario";
   $result=mysqli_query($conexion,$traer_propietarios);
   while($mostrar=mysqli_fetch_array($result)){
 ?>    
  <option value='<?php echo $mostrar['dni'];?>'><?php echo 'DNI Propietario '.$mostrar['dni']?>-<?php echo $mostrar['nombre']?></option>  
  <?php 
	  }
  ?>
</select>

<select name="select-inquilino" class="form-select" aria-label="Default select example">
  <option selected>Elija un Inquilino</option>
    <?php
    $traer_inquilinos = "SELECT dni, nombre FROM Inquilino";
    $result=mysqli_query($conexion,$traer_inquilinos);
    while($mostrar=mysqli_fetch_array($result)){
    ?>    
  <option value='<?php echo $mostrar['dni'];?>'><?php echo 'DNI Inquilino '.$mostrar['dni']?>-<?php echo $mostrar['nombre']?></option>  
    <?php 
	   }
  	?>
</select>

<select name="select-propiedad" class="form-select" aria-label="Default select example">
  <option selected>Elija una propiedad</option>
   <?php
   $traer_propiedades = "SELECT id, tipo, direccion, id_propietario FROM Propiedad";
   $result=mysqli_query($conexion,$traer_propiedades);
    while($mostrar=mysqli_fetch_array($result)){
    ?>    
  <option value='<?php echo $mostrar['id'];?>'><?php echo $mostrar['id']?>-<?php echo $mostrar['tipo']?>-<?php echo 'Dirección '.$mostrar['direccion']?>-<?php echo 'DNI Propietario '.$mostrar['id_propietario']?></option>  
  <?php 
	   }
	?>
</select>

<div class="col-md-2">
   <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
   <input type="date" name = "fecha_inicio" class="form-control" id="fecha_inicio">

 </div>
 

 <div class="col-md-2">
     <label for="fecha_fin" class="form-label">Fecha de vencimiento</label>
     <input type="date" name = "fecha_fin" class="form-control" id="fecha_fin">
   </div>


 <div class="col-md-2">
     <label for="precio" class="form-label">Valor Mensual</label>
     <input type="text" name = "precio" class="form-control" id="precio">
   </div>



 <div class="col-12">
   <button type="submit" class="bt" >Ingresar</button>
 </div>
</form>


</body>
