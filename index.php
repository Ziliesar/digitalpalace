<!DOCTYPE html>
<html lang="es">

<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>
    <div id="contobj1" class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-3%">
        <!-- Indicador -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
        
        <!-- contenedor de slider -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="text-align: center;">
                <img src="img/1c.JPG" alt="1" style="width:80%; text-align: center;">
                <div class="carousel-caption d-block d-md-block" style="color: white; background-color: black; opacity:80%;">
                    <h4>Creación de todo tipo de software para todos los dispositivos.</h5>
                    <h5>Apps, juegos y todo tipo de software.</p>
                </div>
            </div>
            <div class="carousel-item" >
                <img src="img/2c.jpg" alt="2" style="width:80%">
                <div class="carousel-caption d-block d-md-block" style="color: white; background-color: black; opacity:80%;">
                    <h4>Creación y mantenimiento de sitios web</h5>
                    <h5>Elaboramos y le damos mantenimiento a tu sitio web, cumpliendo con todas tus necesidades y expectativas</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="img/3c.JPG" alt="3" style="width:80%">
                <div class="carousel-caption d-block d-md-block" style="color: white; background-color: black; opacity:80%;">
                    <h4>Ayuda en la creación de software en tus tareas y proyectos universitarios</h5>
                    <h5>¿Eres estudiante informatico o cursas alguna clase de computación?, ponte en contacto con nosotros para recibir ayuda</p>
                    </div>
            </div>
        </div>
        
        <!-- flechas de izquierda y derecha -->
        <a class="carousel-control-prev" href="#myCarousel" style="background: black; width:12.4%; height: 87.5%; margin-top: 3%;" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" style="background: black; width:12.4%; height: 87.5%; margin-top: 3%;" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!--CARRUSEL 1-->

    <div class="font-center row" id="parrafo2b" style="margin-top:-3%;margin-bottom:-3%">
        <h1 class="col-md-12" id="parrafo2">Desarrollo y mantenimiento de software</h1>
        <p class="col-md-12" id="parrafo2a">Sabemos de la importancia de sus proyectos en el nuevo mundo digital, el ser entregados
            a tiempo y con una calidad superior son factores que nos respaldan como empresa. El trabajo que realizamos
            con nuestros clientes los ayuda para mantenerse a la vanguardia en la nueva era digital ademas de 
            ayudar de manera proactiva sus negocios y actividades para satisfarse y susperar sus expectativas.
        </p>
    </div>


        <div id="parte1">
            <!--IMAGEN 1 SLIDER-->
            
            <!--IMAGEN 1-->
            <div id="imgp1">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Indicador -->
                <ul class="carousel-indicators">
              
                </ul>
        
            <!-- contenedor de slider -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/key2.jpg" alt="1" style="width:100%;">
                    <div class="carousel-caption d-block d-md-block" style="top:25%" id="titl3">
                        <h3 >Las herramientas para triunfar en el mundo digital al alcance de tus manos</h3>
    
                    </div>
                </div>
            
            </div>
        </div>
        <!-- FIN IMAGEN 1 -->


                <br>
                
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
                

            </FONT>
            </div>
        </div>            
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