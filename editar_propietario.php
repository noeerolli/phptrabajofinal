
<?php
require 'conexion.php';
include 'nav.php';


if(isset($_GET['dni'])) {
    $dni = $_GET ['dni'];
    $query = "SELECT * FROM propietario WHERE dni = $dni";
}



if (isset($_POST['modif_prop'])){  
    $propietario = $_POST['propietario'];
    $dni_prop = $_POST['dni_prop'];
    $telefono_prop = $_POST['telefono_prop'];
    $email_prop = $_POST['email_prop'];
    
    $query = "UPDATE propietario set dni = $dni_prop, nombre = '$propietario', telefono = $telefono_prop, email = '$email_prop'  where dni = $dni";
     
   // header("Location:tabla_propietarios.php");
    
    echo "<script type='text/javascript'>document.location = 'tabla_propietarios.php';</script>";



    mysqli_query($conexion, $query);

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propietario</title>

<link rel="stylesheet" href="style_form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>
    
<div class='form_div'>
    <form action="" method ="POST" id=formlario_prop class="row g-3">

    <h3 id="title">Editar Propietario</h3>


<div class="col-md-6">
  <label for="propietario" class="form-label">Propietario</label>
  <input type="text" name = "propietario" class="form-control" value="<?php echo $Propietario;?>">

  </div>


  <div class="col-md-2">
    <label for="telefono" class="form-label">DNI</label>
    <input type="number" name = "dni_prop" class="form-control" value = "<?php echo $dni_prop;?>">
  </div>

<div class= "col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name = "email_prop" class="form-control" value="<?php echo $email_prop;?>">
  </div>


 <div class="col-md-2">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="number" name = "telefono_prop" class="form-control" value="<?php echo $telefono_prop;?>">
  </div>




  <div class="col-12">

    <button type="submit" class="bt" name ='modif_prop'>Guardar</button>
  
  </div>

</form>
</div>
</body>




