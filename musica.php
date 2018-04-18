<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- Aspectos Básicos
    ================================================== -->
    <meta charset="utf-8">
    <title>Camilo Castro</title>
    <meta name="description" content="">
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
                            <a style="color:rgb(145, 145, 145);" href="musica.php" title="">Música</a>
                        </li>
                        <li>
                            <a href="educacion.php" title="">Educación</a>
                        </li>
                        <li>
                            <a href="contacto.php" title="">Contacto</a>
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

    <!-- s-content biografía
    ================================================== -->

    <!-- s-content -->

    <section class="s-content">
        <div class="row">
            <h1 style="text-align: center;">Musica en soundcloud</h1>
            <iframe width="100%" height="350" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/44185013&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
        </div>
    </section>


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