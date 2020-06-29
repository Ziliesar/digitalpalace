<!DOCTYPE html>
<html lang="es" class="animate__animated animate__slideInRight">
<?php include("head.php"); ?>
<body  id="font">
    <?php include("header.php"); ?>
            <form action="enviar.php" method="post" class="formenv1" id="formenv" style="text-align: center;">
            <h1 style="color:white">Enviar consulta</h1>
      <input type="text" style="opacity:none;" name="nombre" placeholder="Ingrese su nombre" required>
      <input type="text" name="correo" placeholder="Ingrese su correo" required>
      <input type="text" name="telefono" placeholder="Ingrese su numero de teléfono (opcional)">
      <textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
      <input class="btn btn-primary" type="submit" value="ENVIAR" id="boton" name="submit" style="align: center;">
    </form>
    <script src="js/main.js"></script>
</body>
</html>