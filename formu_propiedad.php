<?php
require 'conexion.php';
include 'nav.php';




$tipo = $_POST['tipo'];
$direccion = $_POST['direccion'];
$comodidades = $_POST['comodidades'];
$propietario = $_POST['select-propietario'];


$insertarPropiedad = "insert into Propiedad (tipo, direccion, comodidades, id_propietario)
values ('$tipo', '$direccion', '$comodidades', $propietario)";


$query = mysqli_query($conexion, $insertarPropiedad);

if($query){
  //header("Location:tabla_propiedad.php
  echo "<script type='text/javascript'>document.location = 'tabla_propiedad.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Propiedad</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

   <div class = "form_div">

      <form action = "formu_propiedad.php" method ="POST" id=formulario_prop class="row g-3">

      <h3 id="title">Nueva Propiedad</h3>

       <div class="col-md-4">
          <label for="tipo" class="form-label">Tipo</label>
          <input type="text" name = "tipo" class="form-control" id="tipo">
      </div>

      <div class="col-md-6">
         <label for="direccion" class="form-label">Dirección</label>
         <input type="text" name = "direccion" class="form-control" id="direccion">
      </div>

      <div class="col-10">
         <label for="comodidades" class="form-label">Comodidades</label>
         <input type="text" name = "comodidades" class="form-control" id="comodidades" placeholder="">
      </div>

      <div class="col-10">
          <select name="select-propietario" class="form-select" aria-label="Default select example">
          <option selected>Elija un propietario</option>
          <?php
          $traer_propietarios = "SELECT dni, nombre FROM propietario";
          $result=mysqli_query($conexion,$traer_propietarios);
          while($mostrar=mysqli_fetch_array($result)){
          ?>    
          <option value='<?php echo $mostrar['dni'];?>'>
          <?php echo $mostrar['dni']?>-<?php echo $mostrar['nombre']?>
          </option>  
          <?php 
	        }
      	 ?>
         </select>
    </div>

      <div class="col-12">
    
        <button type="submit" name="guardar_prop"  class="bt" >Ingresar</button>
          
      </div>

   </form>
   </div>
</body>




