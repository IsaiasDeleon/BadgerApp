<?php
session_start();
$_SESSION['MENU'] = "CONTACTO";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
   include 'head.php';
   ?>
    <button class="btn btn-dark menutoggle" id="BTNC"><i class="bi bi-list"></i></button>
    <section class="section-contacto">
    <h1 style="color:#F1C40F;">Contáctanos...</h1>
    
    <div style="height: 70px; width:100%;">
        <h4 style="display: inline-block;" id="Prueba"></h4>
        <h4 style="color:#F1C40F;display: inline-block;">/</h4>
    </div>
        <div class="divContactanos" >
            <div>
                <div class="formulario-flex">
                    <div class="form-floating ms-2 col" >
                        <input  type="text" class="form-control" />
                        <label class='fw-bold'>Nombre:</label>
                    </div>
                    <div class="form-floating ms-2 col correo" >
                        <input  type="email" class="form-control" />
                        <label class='fw-bold'>Correo:</label>
                    </div>
                </div>
                <br/>
                <div class="d-flex">
                <div class="form-floating ms-2 col" >
                    <select class="form-select" aria-label="Floating label select example">
                                <option value="Celulares">Ingeniería</option>
                                <option value="Pantallas">Integración de robots</option>
                                <option value="Calzado">Aplicaciones de visión y aplicaciones de brazos robóticos</option>
                                <option value="Muebles">Diseño de tableros de control y programación</option>
                                <option value="Otros">Actualización y mejoras de equipos con el respaldo de nuestros proveedores y partners</option>
                                <option value="Otros">Cursos y capacitación</option>
                            </select>
                        <label class='fw-bold'>¿Que te interesa?</label>
                    </div>
                </div>
                <br/>
                <div class="d-flex">
                    <div class="form-floating ms-2 col" >
                        <textarea  type="text" style="min-height:100px" class="form-control">
                        </textarea>
                        <label class='fw-bold'>Mensaje:</label>
                    </div>
                </div>
                <br/>
                <div style="float:right" class="d-flex ">
                    <button class="btn" style="background:#F1C40F;">Enviar</button>
                </div>
 
            </div>
            <div class="ms-2">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3694.924629885087!2d-100.96703682406766!3d22.166940847714898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aa1dde41b7617%3A0x53e01f58327fb2bb!2sBadger%20Automation!5e0!3m2!1ses-419!2smx!4v1683661583270!5m2!1ses-419!2smx"
                 style="border-radius:20px; width:100%; height:400px" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
           

        </div>

    </section>
    <?php
        include 'footer.php';
    ?>
    <script>
    let val = document.getElementById("Prueba");
    let text1 = "“Estar a la par en precio y calidad sólo te mete al juego, el servicio es lo que te hace ganarlo”.";
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
    document.getElementById("BTNCE").onclick = function() {
        let element = document.getElementById("MENU");
        element.classList.toggle("menu-headActive");
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>