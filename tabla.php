<?php
include 'conexion.php';

include 'nav.php';
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</head>
<body>
    <h3 id="title">Propiedades Alquiladas<h3>
<div class= "table-container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tipo</th>
      <th scope="col">Dirección</th>
      <th scope="col">Propietario</th>
      <th scope="col">Inquilino</th>
      <th scope="col">Fecha Vencimiento</th>
    </tr>
  </thead>
  <tbody>
   
		<?php 
		$sql= "SELECT p.tipo, p.direccion, propietario.dni AS dni_prop, propietario.nombre AS nombre_prop, i.dni AS i_dni, i.nombre AS i_nombre, c.fecha_fin  from Propiedad p JOIN propietario ON(p.id_propietario = propietario.dni) JOIN Contrato c ON(c.id_propietario = propietario.dni && c.id_propiedad = p.id) JOIN Inquilino i ON(c.id_inquilino = i.dni)"; 
    
    //$fecha_end = date('d-m-y', strotime($_GET['']));


  // SELECT DATE_FORMAT(campo_fecha, '%d-%m-%Y') fecha FROM tabla;

    $result=mysqli_query($conexion,$sql);
    
		while($mostrar=mysqli_fetch_array($result)){



		 ?>
    <div class = 'tablas_estilo'>
		<tr>
      <td><?php echo $mostrar['tipo'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['nombre_prop'] ?>-<?php echo 'DNI '.$mostrar['dni_prop'] ?></td>
			<td><?php echo $mostrar['i_nombre'] ?>-<?php echo $mostrar['i_dni'] ?></td>
      <td><?php echo $mostrar['fecha_fin'] ?></td>
     
		</tr>
	<?php 
	}
	?>
  </tbody>
</table>

</div>

<div class="col-12">
    
  <button type="submit" name="bt_index" onclick=" location.href='index.php'" class="bt" >Regresar</button>
          
</div>

</body>
