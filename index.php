<!DOCTYPE html>
<html lang="es">

<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>
    <div id="contobj1" class="container-fluid">
            <div id="parte1">
                <div class="contenedor"  >
                    <img class="key" src="img/key2.jpg" />
                    <!--div class="texto1"></div-->

                    <div class="texto2">Las herramientas para triunfar en el mundo digital al alcance de tus manos</div>

                </div>
                <br>
                <div class="font-center row" >
                    <h1 class="col-md-12">Desarrollo y mantenimiento de software</h1>
                    <p class="col-md-12">Sabemos de la importancia de sus proyectos en el nuevo mundo digital, el ser entregados
                    a tiempo y con una calidad superior son factores que nos respaldan como empresa. El trabajo que realizamos
                    con nuestros clientes los ayuda para mantenerse a la vanguardia en la nueva era digital ademas de 
                    ayudar de manera proactiva sus negocios y actividades para satisfarse y susperar sus expectativas.
                    </p>
                </div>
            </div>


        <div class="container_fluid">
            <div class="row" style="width:100%;  ">
                <div class="col-md-5"> 
                    <img id="imgres" src="img/responsive1.png" >
                </div>

                <div class="col-md-7">
                    <p class="font-center centrar">
                        Brindar excelencia y calidad en cada uno de nuestros servicios prestados, proporcionando las 
                        mejores herramientas tecnológicas a medida de las necesidades de nuestros clientes, con el objetivo
                        de incrementar su productividad y competitividad en el mundo virtual. Para ello implementamos 
                        soluciones prácticas  y creativas, fundamentadas en el avance del desarrollo web, como empresa 
                        innovadora buscamos el máximo beneficio para nuestros clientes a través de la calidad de nuestros 
                        servicios y productos, creemos en el liderazgo empresarial responsable y en el desarrollo de un
                        crecimiento rentable en conjunto con la sostenibilidad virtualmente progresiva.</p>
                </div>
            </div>            
        </div>

        <br>
    <div class="container_fluid2">
        <div class="row2" style="width:100%; fond-color:#fff; ">
            <div class="col-md-62" id="titulof4" > 
            <font size="6%" COLOR="white">LO QUE TÚ TE MERECES</FONT>
            </div>

            <div class="col-md-62" id="parrafof2">
            <FONT COLOR="white">Ubicados en Honduras contamos con una gran variedad de 
                facilidades para tu negocio o trabajo, ya que realizamos cualquier tipo de proyecto
                como ser:<br>
                -Elaboracion y mantenimientos de sitios web.<br>
                -Elaboracion de apps y programas.

            </FONT>
            </div>
        </div>            
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicador -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
        
        <!-- contenedor de slider -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/universo.jpg" alt="1" >
            </div>
            <div class="carousel-item">
                <img src="img/universo.jpg" alt="2" >
            </div>
            <div class="carousel-item">
                <img src="img/universo.jpg" alt="3">
            </div>
        </div>
        
        <!-- flechas de izquierda y derecha -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>
    

    <?php include("footer.php") ?>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('.zoom').hover(function() {
                $(this).addClass('transition');
            }, function() {
                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>