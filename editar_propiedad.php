<?php

require 'conexion.php';
include 'nav.php';



if(isset($_GET['id'])) {
  $id = $_GET ['id'];
  $query = "SELECT * FROM Propiedad WHERE id = $id";
  
}


if (isset($_POST['modif_propiedad'])){ 
    
    
  $tipo = $_POST['tipo'];
  $direccion = $_POST['direccion'];
  $comodidades = $_POST['comodidades'];
  $propietario = $_POST['select-propietario'];


    
  $query = "UPDATE Propiedad set tipo = '$tipo', direccion = '$direccion', comodidades = '$comodidades', id_propietario = $propietario  where id = $id";
 
 // header("Location:tabla_propiedad.php");
 
 echo "<script type='text/javascript'>document.location = 'tabla_propiedad.php';</script>";
  
  
    mysqli_query($conexion, $query);

}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propeidad</title>
<link rel="stylesheet" href="style_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class = "form_div">
      <form action = "" method ="POST" id=formulario_prop class="row g-3">

       <h3 id="title">Editar Propiedad</h3>

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
            <option value='<?php echo $mostrar['dni'];?>'><?php echo $mostrar['dni']?>-<?php echo $mostrar['nombre']?></option>  
            <?php 
	        }
          ?>       
         </select>
        </div>

      <div class="col-12">
        <button type="submit" name = "modif_propiedad" class="bt">Guardar</button>
     </div>
      
    </form>
 </div>
</body>