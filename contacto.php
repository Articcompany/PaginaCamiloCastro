<!DOCTYPE html>
<html class="no-js" lang="es">

<head>

    <!--- Aspectos Básicos
    ================================================== -->
    <meta charset="utf-8">
    <title>Camilo Castro</title>
    <meta name="description" content="Contacto de Camilo Castro">
    <meta name="author" content="">

    <!-- metas especificos para mobile
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">
    <!-- pageheader
    ================================================== -->
    <header id="header2">
        <nav class="header" style="background-color: white;">

            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.php">
                        <span id="name">
                            <img src="images/logo-black3.png" alt="Homepage">
                        </span>
                    </a>
                </div>

                <!-- end header__logo -->

                <a class="header__toggle-menu" href="#0" title="Menu">
                    <span>Menú</span>
                </a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Menù de Navegaciòn</h2>

                    <ul class="header__nav">
                        <li class="current">
                            <a href="index.php" title="">Inicio</a>
                        </li>
                        <li>
                            <a href="biografia.php" title="">Biografía</a>
                        </li>
                        <li>
                            <a href="videos.php" title="">Videos</a>
                        </li>
                        <li>
                            <a href="musica.php" title="">Música</a>
                        </li>
                        <li>
                            <a href="educacion.php" title="">Educación</a>
                        </li>
                        <li>
                            <a style="color:rgb(145, 145, 145);" href="contacto.php" title="">Contacto</a>
                        </li>
                    </ul>
                    <!-- fin header__nav -->
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Cerrar</a>
                </nav>
                <!-- fin header__nav-wrap -->
            </div>
            <!-- header-content -->
        </nav>
    </header>
    <!-- header -->

    <!-- s-content contacto
    ================================================== -->
    <section class="s-content">

        <div class="row narrow section-intro add-bottom text-center">

            <div class="col-twelve tab-full">
                <h1>Contacto</h1>
            </div>

        </div>

        <div class="row">

            <div class="col-six tab-full">
                <h3>Información de Contacto</h3>
                <p>k100077k@hotmail.com<br> CamiloCastroMusic.com <br> Telefono: (+57) 302 222 83 65 <br> WhatsApp: (+57) 302 222 83 65
                </p>
            </div>

            <div class="col-six tab-full">

                    <h3 class="add-bottom">Formulario de Contacto</h3>
                    <form action="sections/enviarformulario.php" method="post" id="contacto">
                        <div>
                            <label for="sampleInput">Correo Electrónico</label>
                            <input class="full-width" name="email" ype="email" placeholder="ejemplo@gmail.com" id="email" required>
                        </div>
                        <div>
                            <label for="sampleRecipientInput">En que estas interesado</label>
                            <div class="cl-custom-select">
                                <select class="full-width" name="opcion" id="opcion" required>
                                            <option value="Option 1">Música para cine y televisión</option>
                                            <option value="Option 2">Composición musical profesional</option>
                                            <option value="Option 3">Clases personalizadas</option>
                                        </select>
                            </div>
            </div>
                    </div>

                        <label for="exampleMessage">Mensaje</label>
                        <textarea class="full-width" placeholder="Escribe acerca de tu ínteres" name="mensaje" id="mensaje" required></textarea>

                    <input class="btn--primary full-width" type="submit" value="Enviar">

                </form>

            </div>
            <!-- end row -->

    </section>
    <!-- fin s-content contacto -->

    <?php
        include "./sections/footer.html";
    ?>


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>