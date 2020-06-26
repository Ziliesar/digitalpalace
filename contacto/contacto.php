<!DOCTYPE html>
<html lang="es">

<?php include("head.php"); ?>

<body class="font">
    <?php include("header.php"); ?>
    
    <form style="color: white; background-color: black; opacity:80%;">
            <h1>Enviar consulta</h1>
      
      
      <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
      <input type="text" name="correo" placeholder="Ingrese su correo" required>
      <input type="text" name="telefono" placeholder="Ingrese su numero de teléfono (opcional)" required>
      <textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
      
      <input class="btn btn-primary" type="submit" name="submit">
      
    </form>
 <?php
    if(isset($_POST['submit'])){
        $nombre= $_POST['nombre'];
        $correo= $_POST['correo'];
        $telefono= $_POST['telefono'];
        $mensaje= $_POST['mensaje'];
        
        $contenido="Nombre: " . $nombre . "\nCorreo: ". $correo . "\nTeléfono: ". $telefono ."\nMensaje: ". $mensaje;
   
    
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
   
    $destino = "contacto@digitalpalace.net";
    $from = "pronaldogp@gmail.com";
    $to = $destino;
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($contenido);
    echo "El mensaje fue enviado exitosamente";  
    }

    
  
  
?>

    <script src="js/main.js"></script>
</body>

</html>