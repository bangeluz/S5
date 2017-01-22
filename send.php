<?php
  $destino = "focoosgroup@gmail.com ";
  $nombre = $_POST["nombre"];
  $numero = $_POST["tel"];
  $email = $_POST["email"];
  $asunto = $_POST["asunto"];
  $message = $_POST["mensaje"];
  $contenido = "Nombre: ".$nombre."\nEmail: ".$email."\nMensaje: ".$message;
  mail($destino, $asunto." - ".$numero, $contenido);
  header("Location:gracias.html")
?>
