<?php
require 'conexion.php';
include 'nav.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://kit.fontawesome.com/e23d5c2fd1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="estilos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</head>
<body>
    <h3  id="title">Propiedades<h3>
<div class= "table-container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Tipo</th>
      <th scope="col">Dirección</th>
      <th scope="col">Comodidades</th>
      <th scope="col">DNI Propietario</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   
		<?php 
		$sql= "SELECT * FROM Propiedad"; 
    
    
    $result=mysqli_query($conexion,$sql);
    
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
      <td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['tipo'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['comodidades'] ?></td>
      <td><?php echo $mostrar['id_propietario'] ?></td>
      <td><a href="editar_propiedad.php?id=<?php echo $mostrar['id']?>"><i class="fas fa-pen-fancy"></i></a></td>
      <td><a href="eliminar_propiedad.php?id=<?php echo $mostrar['id']?>"><i class="far fa-trash-alt"></i></a></td>
    </tr>

	<?php 
	}
	 ?>
  </tbody>
</table>
</div>


<button type="" class="bt" onclick = "location='formu_propiedad.php'">Ingresar Nueva</button>

</body>
