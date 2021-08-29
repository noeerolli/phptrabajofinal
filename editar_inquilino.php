
<?php
require 'conexion.php';
include 'nav.php';



if(isset($_GET['dni'])) {
  $dni = $_GET ['dni'];
  $query = "SELECT * FROM Inquilino WHERE dni = $dni";
}



if (isset($_POST['modif_inqui'])){  


  $dni_inqui = $_POST['dni_inqui'];
  $nom_inqui = $_POST['nom_inqui'];
  $tel_inqui = $_POST['tel_inqui'];
  $email_inqui = $_POST['email_inqui'];

    
  $updateInquilino = "UPDATE Inquilino set dni = $dni_inqui, nombre = '$nom_inqui', telefono = $tel_inqui, email = '$email_inqui'  where dni = $dni";
                                                                                                              
 // header("Location:tabla_inqui.php");
 echo "<script type='text/javascript'>document.location = 'tabla_inqui.php';</script>";
    
  mysqli_query($conexion, $updateInquilino);

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Editar Inquilino</title>

 <link rel="stylesheet" href="style_form.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<div class = "form_div">

   <form action="" method ="POST" id=formlario_inq class="row g-3">

   <h3 id="title">Editar Inquilino</h3>

  
     <div class="col-md-6">
     <label for="inquilino" class="form-label">Nombre</label>
     <input type="text" name ="nom_inqui" class="form-control" id="inquilino">
   </div>

   <div class="col-md-2">
     <label for="dni" class="form-label">DNI</label>
     <input type="text" name = "dni_inqui" class="form-control" id="dni">
   </div>



   <div class="col-md-6">
     <label for="inputEmail4" class="form-label">Email</label>
     <input type="email" name = "email_inqui" class="form-control" id="inputEmail4">
   </div>


   <div class="col-md-2">
     <label for="telefono" class="form-label">Teléfono</label>
     <input type="text" name = "tel_inqui" class="form-control" id="telefono">
   </div>


   <div class="col-12">
      <button type="submit" name = "modif_inqui" class="bt">Guardar</button>
   </div>

  </form>
  
 </div>

</body>



