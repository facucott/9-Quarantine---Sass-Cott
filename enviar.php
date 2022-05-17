<?php
$destino= "facumcott@gmail.com";
$nombre= $_POST ["nombre"];
$apellido= $_POST ["apellido"];
$correo= $_POST ["correo"];
$comentarios= $_POST ["comentarios"];

$contenido = "Nombre: "  . $nombre .  "\nApellido: "  . $apellido .  "\nCorreo: "  . $correo .  "\nComentarios: "  . $comentarios;

mail($destino,"contacto",$contenido);
header("location:index.html");
?>