<!DOCTYPE html>
<html class="no-js" lang="es">

<head>

    <!--- Aspectos Básicos
    ================================================== -->
    <meta charset="utf-8">
    <title>Camilo Castro</title>
    <meta name="description" content="Videos producidos por Camilo Castro">
    <meta name="author" content="Artic Company S.A.S.">

    <!-- metas specificos para mobile
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

    <!-- pageheader Cabecera
    ================================================== -->
    <?php
        include "./sections/header.html";
    ?>
    <!-- header -->
    <!-- end s-pageheader -->

    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-six md-six tab-full popular">
                <h3>Instrumentos especializados</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a class="popular__thumb">
                            <img src="images/instrumentos/004-guitar.png" alt="Guitarra Clásica">
                        </a>
                        <h5><a href="#formulario">Guitarra Clásica.</a></h5>
                        <section class="popular__meta">
                            <span>Aprende conceptos y todo sobre la Guitarra Clásica.</span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a class="popular__thumb">
                            <img src="images/instrumentos/002-guitar-1.png" alt="">
                        </a>
                        <h5><a href="#formulario">Guitarra Eléctrica</a></h5>
                        <section class="popular__meta">
                            <span> Aprende los conceptos y las diferencias de tocar una Guitarra Eléctrica.</span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a class="popular__thumb">
                            <img src="images/instrumentos/003-bass-guitar.png" alt="">
                        </a>
                        <h5><a href="#formulario">Bajo Eléctrico</a></h5>
                        <section class="popular__meta">
                            <span>Aprende a tocar un instrumento increile como lo es el Bajo Eléctrico.</span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a class="popular__thumb">
                            <img src="images/instrumentos/001-piano.png" alt="">
                        </a>
                        <h5><a href="#formulario">Piano</a></h5>
                        <section class="popular__meta">
                            <span>Aprende un magnifico instrumento que inspira y hace parte de la cultura mundial como lo es el Piano.</span>
                        </section>
                    </article>
                </div>
                <!-- end popular_posts -->
            </div>
            <!-- end popular -->

            <div class="col-six md-six tab-full about">

                <h3>Clases de Música</h3>

                <p>
                    A partir del gran recorrido como docente en diversas instituciones de educación, y gracias a la basta experiencia laboral adquirida trabajando con personas de diversas edades, desde niños que apenas comienzan hasta alumnos que ya tienen nociones avanzadas
                    de música.
                </p>

                <a name="formulario"></a>

                <ul class="about__social">
                    <li>
                        <a href="https://www.youtube.com/channel/UCQ7B7G3mIg_wXBe7bUC9CLA?view_as=subscriber"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://api.whatsapp.com/send?phone=57##########&text=Hola%2C%20estoy%20interesado%20en%20sus%20servicios%2C%20como%2C%20compositor."><i class="fab fa-whatsapp-square"></i></a>
                    </li>
                    <li>
                        <a href="mailto:k100077k@hotmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <!-- end header__social -->
            </div>
            <!-- end about -->

        </div>
        <!-- end row -->
    </section>

    <!-- s-content contacto
    ================================================== -->
    <section class="s-content">

        <div class="row">

            <div class="col-four tab-full">

                <h3>Información de Contacto</h3>
                <p>k100077k@hotmail.com<br> CamiloCastroMusic.com <br> Telefono: (+57) 302 222 83 65 <br> WhatsApp: (+57) 302 222 83 65
                </p>
            </div>
            <form action="/sections/enviarformulario.php">
                <div class="col-four tab-full">

                    <h3 class="add-bottom">Formulario de Contacto</h3>

                    <div>
                        <label for="sampleInput">Correo Electrónico</label>
                        <input class="full-width" type="email" placeholder="ejemplo@gmail.com" id="sampleInput">
                    </div>
                    <div>
                        <label for="sampleRecipientInput">¿Qué instrumento quieres aprender?</label>
                        <div class="cl-custom-select">
                            <select class="full-width" id="sampleRecipientInput">
                                        <option value="Option 1">Guitarra Clásica</option>
                                        <option value="Option 2">Guitarra Eléctrica</option>
                                        <option value="Option 3">Bajo Eléctrico</option>
                                        <option value="Option 4">Piano</option>
                                    </select>
                        </div>
                    </div>
                </div>

                <div class="col-four tab-full">
                    <br>
                    <br>
                    <label>Mensaje</label>
                    <textarea class="full-width" placeholder="Escribe acerca de tu ínteres" id="exampleMessage"></textarea>

                    <input class="btn--primary full-width" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </section>
    <!-- fin s-content contacto -->

    <?php
        include "./sections/footer.html";
    ?>

    <!-- preloader
    ================================================== -->
    <?php
        include "./sections/preloader.html";
    ?>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</body>

</html>