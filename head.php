
<div id="MENU" class="menu-head">
    <button class="btn" id="BTNCE" style="">
        <i style="color:#fff"class="bi bi-x-square-fill h1"></i>
    </button>
        <div class="contenedor">
            <div class="logo text-center">
                <img src="assets/logo-footer-02.png" class="Logo"  alt="Logo Badger">
            </div>
            <div class="menu-links">
                <div  style=" <?php echo ($_SESSION['MENU'] == "INICIO") ? "background-color: #686868;": "" ?> " class="div-links">
                    <a href="index.php">
                        <i class="bi bi-house-fill h4"></i>
                        <h4>Inicio</h4>
                    </a>
                </div>
                <div    class="div-links">
                    <a>
                        <i class="bi bi-book-fill h4"></i>
                        <h4>Cursos</h4>
                    </a>
                </div>
                <!-- <div class="div-links">
                    <a>
                        <i class="bi bi-wrench-adjustable h4"></i>
                        <h4>Servicios</h4>
                    </a>
                </div>
                <div class="div-links">
                    <a>
                        <i class="bi bi-briefcase-fill h4"></i>
                        <h4>Proyectos</h4>
                    </a>
                </div>
                <div class="div-links">
                    <a>
                        <i class="bi bi-journal-text h4"></i>
                        <h4>Blog</h4>
                    </a>
                </div> -->
                <div style=" <?php echo ($_SESSION['MENU'] == "CONTACTO") ? "background-color: #686868;": "" ?> " class="div-links">
                    <a href="Contacto.php">
                        <i class="bi bi-person-lines-fill h4"></i>
                        <h4>Contacto</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>