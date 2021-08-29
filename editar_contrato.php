<?php
require 'conexion.php';
include 'nav.php';


if(isset($_GET['id_propiedad'])) {
    $id_propiedad = $_GET ['id_propiedad'];
    $query = "SELECT * FROM Contrato WHERE id_propiedad = $id_propiedad";
}

//echo var_dump($id_propiedad);

if (isset($_POST['modif_contrato'])){ 

    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $precio = $_POST['precio'];
    $inquilino = $_POST['select-inquilino'];
    $propietario= $_POST['select-propietario'];
    $propiedad= $_POST['select-propiedad'];
    
    $query = "UPDATE Contrato set id_propiedad = $propiedad, id_propietario = $propietario, id_inquilino = $inquilino, fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin', precio = $precio  where id_propiedad = $id_propiedad";
                                                                                                              
    //header("Location:tabla_cont.php");
    
    echo "<script type='text/javascript'>document.location = 'tabla_cont.php';</script>";
    
    
    mysqli_query($conexion, $query);


}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contrato</title>
    <link rel="stylesheet" href="style_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

  <h3 id="title">Editar Contrato</h3>

  <div class = "form_div">

    <form action = "" method ="POST" id=formlario_prop class="row g-3">

     <div class= "col-md-10">

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

     <div class= "col-md-10"> 
       <select name="select-inquilino" class="form-select" aria-label="Default select example">
          <option selected>Elija un Inquilino</option>
            <?php
              $traer_inquilinos = "SELECT dni, nombre FROM Inquilino";
              $result=mysqli_query($conexion,$traer_inquilinos);
              while($mostrar=mysqli_fetch_array($result)){
              ?>    
             <option value='<?php echo $mostrar['dni'];?>'><?php echo $mostrar['dni']?>-<?php echo $mostrar['nombre']?></option>  
            <?php 
	         }
        	?>
        </select>
      </div> 

      <div class= "col-md-10">
       <select name="select-propiedad" class="form-select" aria-label="Default select example">
         <option selected>Elija una propiedad</option>
          <?php
            $traer_propiedades = "SELECT id, tipo, direccion, id_propietario FROM Propiedad";
            $result=mysqli_query($conexion,$traer_propiedades);
            while($mostrar=mysqli_fetch_array($result)){
            ?>    
            <option value='<?php echo $mostrar['id'];?>'><?php echo $mostrar['id']?>-<?php echo $mostrar['tipo']?>-<?php echo 'Dirección'.$mostrar['direccion']?>-<?php echo 'DNI Propietario '.$mostrar['id_propietario']?></option>  
            <?php 
	        }
        	?>
       </select>
      </div>

      <div class="col-md-4">
        <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
       <input type="date" name = "fecha_inicio" class="form-control" id="fecha_inicio">
     </div>
 
     <div class="col-md-4">
       <label for="fecha_fin" class="form-label">Fecha de vencimiento</label>
       <input type="date" name = "fecha_fin" class="form-control" id="fecha_fin">
     </div>

     <div class="col-md-2">
       <label for="precio" class="form-label">Valor Mensual</label>
       <input type="text" name = "precio" class="form-control" id="precio">
     </div>

     <div class="col-12">
       <button type="submit" class="bt" name= "modif_contrato">Guardar</button>
     </div>

    </form>

   </div>

</body>






