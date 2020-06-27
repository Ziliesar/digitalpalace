<!DOCTYPE html>
<html lang="es">
<?php include("head.php"); ?>
<body class="font">
    <?php include("header.php"); ?>
            <form action="enviar.php" method="post" style="color: white; background-color: black; opacity:80%;">
            <h1>Enviar consulta</h1>
      <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
      <input type="text" name="correo" placeholder="Ingrese su correo" required>
      <input type="text" name="telefono" placeholder="Ingrese su numero de teléfono (opcional)">
      <textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
      <input class="btn btn-primary" type="submit" value="ENVIAR" id="boton" name="submit">
    </form>
    <script src="js/main.js"></script>
</body>
</html>