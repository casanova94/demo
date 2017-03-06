<?php
//script para enviar correo
$destino = "luis.casanova.uady@live.com";
$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];
$mensaje = $_POST["Mensaje"];
$contenido = "Nombre: ". $nombre."\nCorreo: ". $correo."\nTeléfono: ".$telefono."\nMensaje: ".$mensaje;
$state = mail($destino, "Contacto", $contenido);
header("Location:index.html?sent=1");
?>