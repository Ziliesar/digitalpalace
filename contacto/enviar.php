<?php
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "pronaldogp@gmail.com";
    $to = "contacto@digitalpalace.net";
    $subject = "Checking PHP mail";
    $message = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    header("Location:redireccion.php");
?>