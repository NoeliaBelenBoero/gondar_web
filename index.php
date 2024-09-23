<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gondar Web</title>
    <script src="https://kit.fontawesome.com/b408879b64.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style_1.css">
    <link rel="stylesheet" href="styles/header_style.css">
    <link rel="stylesheet" href="styles/banner_style.css">
    <link rel="stylesheet" href="styles/search_style.css">
    <link rel="stylesheet" href="styles/slider_style.css">
    <link rel="stylesheet" href="styles/we_style.css">
    <link rel="stylesheet" href="styles/location_style.css">
    <link rel="stylesheet" href="styles/videos_style.css">
    <link rel="stylesheet" href="styles/form_style.css">
    <link rel="stylesheet" href="styles/footer_style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <header>
        <div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="assets/logo.jpg" alt="">
                </a>
            </div>

            <div class="btn__log-icon">
                <div class="btn__login">
                    <a href="definit_log/log.php">LOGIN</a>
                </div>
                <button class="btn__icon" id="btn__icon"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <div class="menu__hidden">

                <i class="fas fa-bars"></i>

            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#banner">Inicio</a></li>
                        <li><a href="#we">Quienes somos?</a></li>
                        <li><a href="#location">Ubicación</a></li>
                        <li><a href="#videos">Videos</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php 
       include("include/search_1.php");
    ?>

    <main>

        <div class="banner" id="banner">
            <div class="capa"></div>
            <div class="banner__text">
                <h2>Fábrica de chacinados Gondar</h2>
                <p>Elaboramos productos de máxima calidad, 100% puro cerdo.<br>
                    Venta en fábrica por mayor y menor.<br>
                    Producto Marplatense.
                </p>
                <div class="btn__products">
                    <a href="products.php">PRODUCTOS</a>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="img_slider/move1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move5.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img_slider/move5.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="container__we" id="we">
            <h1>Quienes somos?</h1>
            <div class="cover__we">
                <section class="text__cover-we">
                    <p><b>PROYECTO GONDAR S.A.</b> es una fábrica de chacinados radicada en la ciudad de Mar del Plata
                        (pcia. de Bs. As., Rep. Argentina).Comienza su actividad comercial a mediados de 2020,
                        siendo un emprendimiento comercial dedicado a la elaboración y venta al por mayor y menor
                        de nuestros productos.
                    </p>
                </section>
                <section class="slider__cover">
                    <ul>
                        <li>
                            <img src="assets/b_1.jpg" alt="">
                            <img src="assets/b_2.jpg" alt="">
                            <img src="assets/b_3.jpg" alt="">
                            <img src="assets/b_5.jpg" alt="">
                        </li>
                    </ul>
                </section>
            </div>
            <div class="cover__we">
                <section class="slider__cover">
                    <ul>
                        <li>
                            <img src="assets/b_4.jpg" alt="">
                            <img src="assets/b_5.jpg" alt="">
                            <img src="assets/b_6.jpg" alt="">
                            <img src="assets/b_2.jpg" alt="">
                        </li>
                    </ul>

                </section>
                <section class="text__cover-we">
                    <p>Contamos con productos de excelente calidad elaborados con materias primas de primera.
                        Nuestros productos se encuentran en diversos puntos de la ciudad.<br>
                        La atención al público se realiza en nuestra fábrica ubicada en la calle Matheu 6199.<br>
                        Contáctese con nosotros telefónicamente al 0223-351-9467 o personalmente en nuestro local.
                    </p>
                </section>
            </div>
            <section class="more__info">
                <a class="btn__more-info" href="more_info.php">SABER MAS<i
                        class="fas fa-arrow-right"></i></a>
            </section>
        </div>
        <div class="container__location" id="location">
            <div class="map">
                <h1>Ubicación</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12576.438446289478!2d-57.5963275!3d-37.9979037!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584d9d077781f9f%3A0xb9615cd2aec47828!2sChacinados%20Gondar!5e0!3m2!1ses-419!2sar!4v1717990230485!5m2!1ses-419!2sar"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="container__videos" id="videos">
            <h1>Videos</h1>
            <div class="videos">
                <video controls muted>
                    <source src="assets/v_1.mp4" type="video/mp4">
                </video>
                <video controls muted>
                    <source src="assets/v_2.mp4" type="video/mp4">
                </video>
                <video controls muted>
                    <source src="assets/v_3.mp4" type="video/mp4">
                </video>
                <video controls muted>
                    <source src="assets/v_4.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="container__contact" id="contact">
            <h1 class="title_contact">Contacto</h1>
            <div class="contact_wrapper">
                <div class="contact_form">
                    <h2>Dejanos un comentario</h2>
                    <form action="include/data_form.php" method="post" autocomplete="off" id="form">
                        <p>
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" required>
                        </p>
                        <p>
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" required>
                        </p>
                        <p>
                            <label for="phone">Teléfono</label>
                            <input type="number" name="phone" id="phone" required>
                        </p>
                        <p>
                            <label for="message">Comentario</label>
                            <textarea type="text" name="message" id="message" required></textarea>
                        </p>
                        <p>
                            <button type="submit" name="send">ENVIAR</button>
                        </p>
                        <?php
                        if(isset($errors)){
                          if(count($errors) > 0){
                        ?>

                        <div class="row">
                            <div class="col">
                                <div class="alert">
                                    <?php 
                                      foreach($errors as $error) {
                                      echo $error . '<br>';
                                      }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <?php 

                }
            }
            ?>
                        <p class="warnings" id="warnings"></p>
                    </form>
                </div>
                <div class="contact_info">
                    <h3>Más información</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i>
                            <h4>Matheu 6199</h4>
                        </li>
                        <li><i class="fas fa-phone"></i>
                            <h4>0223 351 9467</h4>
                        </li>
                        <li><i class="fas fa-envelope-open-text"></i>
                            <h4>0223 351 9467</h4>
                        </li>
                        <li><img src="assets/whatsapp.png" class="whatsapp">
                            <h4>0223 439 4145</h4>
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            <h4>chacinadosgondar@gmail.com</h4>
                        </li>
                        <li><i class="far fa-clock"></i>
                            <h4>07:00-13:00</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h1 class="title_contact">Comentarios</h1>
        <?php 
           include("include/comments.php");
        ?>
        <footer class="container__footer" id="footer">
            <div class="container_1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="assets/logo.jpg" alt="Logo de Gondar">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>DIRECCION:</h2>
                    <p>Matheu 6199</p>
                </div>
                <div class="box">
                    <h2>DIAS:</h2>
                    <P>lunes a viernes</P>
                </div>
                <div class="box">
                    <h2>HORARIO:</h2>
                    <P>07:00 a 13:00</P>
                </div>
                <div class="box">
                    <h2>CORREO:</h2>
                    <P>chacinadosgondar@gmail.com</P>
                </div>
                <div class="box">
                    <h2>SEGUINOS EN:</h2>
                    <div class="social_networks">
                        <a href="https://www.facebook.com/ChacinadosGondar" target="_blank"><img src="assets/facebook (1).png" class="facebook"></a>
                        <a href="https://www.instagram.com/chacinadosgondar" target="_blank"><img src="assets/instagram.png" class="instagram"></a>
                    </div>
                </div>
            </div>
            <div class="container_2">
                <small>&copy; 2024 <b> - Todos los Derechos Reservados.</b></small>
            </div>
        </footer>

    </main>

    <script src="scripts/active.js"></script>
    <script src="scripts/search_script.js"></script>
    <script src="scripts/validation_form.js"></script>
    <script src="scripts/bootstrap.min.js"></script>

</body>


</html>