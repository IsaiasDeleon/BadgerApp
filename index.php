<?php
session_start();
$_SESSION['MENU'] = "INICIO";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
   include 'head.php';
   ?>   
   <button class="btn btn-dark menutoggle" id="BTNC"><i class="bi bi-list"></i></button>
    <section class="section-index">
        <div class="content-index">
            <div class="Texto-Index-Section">
                <div style="text-align: center; width:80%; flex:1">
                    <div class="text-index" >
                        <h1 class="fw-bold">Badger <b style="color: #F1C40F;">automation</b>
                        </h1>
                        <div style="height: 100px; width:100%;">
                            <h3 id="Prueba" class="Text-index" style=" display: inline-block;"> <b>/</b></h3>
                            <h3 style="color:#F1C40F;display: inline-block;">/</h3>
                        </div>
                    </div>
                    <img src="assets/brazo-robot-abb-unscreen.gif"  alt="brazo">
                </div>
            </div>
            <div class="Diesño-bottom">
                <div class="wave">
                    <div style="display: grid; grid-template-columns: 50% 50%; width: 100%; height: auto; min-height: 250px;">
                        <div class="d-flex text-center "
                            style="justify-content: center; align-items: center; color: aliceblue;">
                            <h1 >¿Por qué nosotros?</h1>
                        </div>
                        <div class="col-6">
                        </div>
                    </div>
                </div>
            </div>
            


        </div>
    </section>
    <section style="background-color: #2c2c2c; padding-top: 0;">
        <div class="ElegirnosPadding">
            <div class="listado">
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Ingeniería
                </h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Integración de
                    robots</h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Sistemas AGV
                </h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Mantenimiento
                </h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Programación
                </h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Refurbish</h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Maquinados
                </h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Sistemas
                    modulares</h5>
                <h5 class="padding10"> <i class="bi bi-check-circle-fill" style="color:#F1C40F"></i> Cursos y
                    capacitación</h5>
            </div>
        </div>
    </section>
    <section class="sectionSomos">
        <h1>Somos...</h1>
        <div class="SomosDiv">
            <div style="padding: 20px;">
                <img src="assets/search-engine-optimization.png" style="float: right;" alt="engineer">
                <h3 style="color:#F1C40F">Experiencia</h3>
                <h5>Contamos con más de 10 años realizando proyectos de automatización e ingeniería en diferentes partes
                    del país.</h5>
            </div>
            <div style="width: 10%; background-color: #F1C40F; height: 100%;">
            </div>
            <div style="padding: 20px;">
                <img src="assets/automatizacion.png" style="float: right;" alt="auto">
                <h3 style="color:#F1C40F">Confianza</h3>
                <h5>Empleamos tecnología de vanguardia con personal altamente motivado, calificado y apasionado por la
                    innovación y la creatividad.</h5>
            </div>
            <div style="width: 10%; background-color: #F1C40F; height: 100%;"></div>
            <div style="padding: 20px;">
                <img src="assets/seguro.png" style="float: right;" alt="seguro">
                <h3 style="color:#F1C40F">Garantía</h3>
                <h5>Nuestro compromiso es brindar la mejor solución para aumentar al máximo la eficiencia de los
                    procesos de nuestros clientes.</h5>
            </div>
            <div style="width: 10%; background-color: #F1C40F; height: 100%;">
            </div>
        </div>
    </section>
    <section class="maximiza" >
        <div class="maximiza-grid" >
            <div class="text-center">
                <h2 className="fw-bold" style="display: inline;">Maximiza</h2>
                <h3 className="fw-bold"
                    style="display:inline;  border-radius: 5px; padding:3px 5px;  background-color: #2c2c2c; color: #fff;">
                    la eficiencia</h3>
                <p  className="fw-bold">Solicita información personalizada</p>
            </div>
            <div class="d-flex text-center " style=" align-items: center; height: 100%;">
                <button class="btn btn-lg" style="background-color: #F1C40F;">Contáctanos</button>
            </div>

        </div>
    </section>
    <section class="socios">
        <h1 >Partners...</h1>
        <h5>Contamos con el respaldo de las mejores marcas de robótica y automatización nacionales e internacionales.
        </h5>
        <br />
        <div class="container-card-socios">
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/bs-on-removebg-preview.png" alt="socio1"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/yaskawa-on-removebg-preview.png" alt="socio2"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio3.png" alt="socio3"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio4.png" alt="socio4"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio5.png" alt="socio5"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio6.png" alt="socio6"></div>
                    <div style="justify-content: center; align-items: center;" class=" d-flex text-center card-socios"><img
                    src="assets/socio7.png" style=" width: 80%!important;" alt="socio7"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio8.png" alt="socio8"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio9.png" alt="socio9"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio10.png" alt="socio10"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"><img
                    src="assets/socio11.png" alt="socio11"></div>
            <div style="justify-content: center; align-items: center; " class=" d-flex text-center card-socios"></div>
        </div>
        
    </section>
    <?php
        include 'footer.php';
    ?>
    <script>
    let val = document.getElementById("Prueba");
    let text1 = "Somos tu aliado en automatización industrial de principio a fin.";
    let text2 =
        "Alcance nacional con sedes en Mexicali y San Luis Potosí, llevamos a cabo proyectos en toda la república.";
    let text3 = "Aumenta la productividad y reduce los tiempos de cliclo con nuestras soluciones integrales.";
    let str = text1;
    let valINI = 1;
    val.innerHTML = "";
    let speed = 60;
    let i = 0;
    let z = 0;

    function typeWriter() {
        if (i < str.length) {
            val.innerHTML += str.charAt(i);
            setTimeout(typeWriter, speed);
            i++;
        } else if (i == str.length) {
            setTimeout(typeWriter2, 3000);
            z = 0;
        }
    }

    function typeWriter2() {
        if (z < str.length) {
            z++;
            val.innerHTML = str.substring(0, str.length - z);
            setTimeout(typeWriter2, speed);

        } else if (z == str.length) {
            i = 0;
            setTimeout(typeWriter, speed)

            valINI++;
            if (valINI == 2) {
                str = text2;
            } else if (valINI == 3) {
                str = text3;
            } else {
                valINI = 2;
                str = text1;
            }
        }
    }
    setTimeout(typeWriter, speed)
    </script>
    <script>
       document.getElementById("BTNC").onclick = function() {  
            let element = document.getElementById("MENU");
            element.classList.toggle("menu-headActive");
        };  
        document.getElementById("BTNCE").onclick = function () {
            let element = document.getElementById("MENU");
            element.classList.toggle("menu-headActive");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>