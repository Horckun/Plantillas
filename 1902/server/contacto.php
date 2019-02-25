<?php
  // DECLARAR VARIABLES
  $nombre = trim($_POST['nombre']);
  $correo = trim($_POST['correo']);
  $telefono = trim($_POST['telefono']);
  $asunto = trim($_POST['asunto']);
  $servicio = trim($_POST['servicio']);
  $comentario = trim($_POST['comentarios']);
  $comentario = wordwrap($comentario, 70, "\r\n");
  $br = "\r\n";

  // COMPROBAR SI EXISTEN
  if(!isset($nombre) || empty($nombre)) {
    echo "Nombre vacío <br>";
    exit;
  }
  if(!isset($correo) || empty($correo)) {
    echo "Correo vacío <br>";
    exit;
  }
  if(!isset($asunto) || empty($asunto)) {
    echo "Asunto vacío <br>";
    exit;
  }
  if(!isset($comentario) || empty($comentario)) {
    echo "Comentario vacío";
    exit;
  }

  // ENVIAR
  mail('admin@horckun.es', 'Contacto Horckun', "Nombre: ".$nombre.$br."Correo electrónico: ".$correo.$br."Teléfono: ".$telefono.$br."Asunto: ".$asunto.$br."servicio: ".$servicio.$br."Comentario: ".$comentario);
  header("Location: ../index_cttevad.php");
?>
