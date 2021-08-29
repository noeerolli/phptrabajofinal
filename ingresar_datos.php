<?php

require 'conexion.php';

//a la tabla propiedades
$tipo = $_POST['tipo'];
$direccion = $_POST['direccion'];
$comodidades = $_POST['comodidades'];

//a la tabla propietario
$propietario = $_POST['propietario'];
$dni_prop = $_POST['dni_prop'];
$telefono_prop = $_POST['telefono_prop'];
$email_prop = $_POST['email_prop'];

//a la tabla inquilino
$dni_inqui = $_POST['dni_inqui'];
$nom_inqui = $_POST['nom_inqui'];
$tel_inqui = $_POST['tel_inqui'];
$email_inqui = $_POST['email_inqui'];

//a la tabla contrato
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$precio = $_POST['precio'];


$insertarPropietario = "insert into propietario(dni, nombre, telefono, email)
values ($dni_prop, '$propietario', $telefono_prop,'$email_prop')";

$insertarPropiedad = "insert into Propiedad (tipo, direccion, comodidades, id_propietario)
values ('$tipo', '$direccion', '$comodidades', $dni_prop)";

$insertarInquilino = "insert into Inquilino (dni, nombre, telefono, email)
values ($dni_inqui, '$nom_inqui', $tel_inqui, '$email_inqui')";

$insertarContrato = "insert into Contrato (id_propietario, id_inquilino, fecha_inicio, fecha_fin, precio)
values ($dni_prop, $dni_inqui, '$fecha_inicio', '$fecha_fin', $precio)";


echo $insertarPropietario;
echo $email_inqui;


mysqli_query($conexion, $insertarPropietario);
mysqli_query($conexion, $insertarPropiedad);
mysqli_query($conexion, $insertarInquilino);
mysqli_query($conexion, $insertarContrato);




?>