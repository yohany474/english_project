<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="shortcut icon" href="assets/img/S_EN_A.png" type="image/x-icon">
        <link rel="stylesheet" href="./assets/css/cards_vocabulary.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Aprende ingles Sena ingles</title>
</head>

<body>
        <div id="dark" class="urr">.</div>
        <div id="container_login">
                <form class="form" id="acceso" method="post">
                        <p class="form-title">Sign in to your account</p>
                        <div class="input-container">
                                <input type="number" name="id" id="id" placeholder="Enter email">
                                <span>
                                </span>
                        </div>
                        <div class="input-container">
                                <input type="password" name="password" id="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="submit" name="acceso">
                                Sign in
                        </button>

                        <p class="signup-link">
                                No account?
                                <!-- <a href="">Sign up</a> -->
                        </p>
                </form>

        </div>
        <header class="enca-contenido">
                <section class="encabezado">
                        <section class="rt-img">
                                <img src="assets/img/S_EN_A-WHITE.png" alt="">
                        </section>
                        <i class='bx bx-menu' id="dasg"></i>
                        <section class="missing" id="miss">
                                <i class='bx bx-x' id="dasr"></i>
                                <section class="conten">
                                        <li><a href="https://prototiposena.englishinteraction.net/senaplacement2022/quiz_html5.html"
                                                        target="_blank">SEPT</a><i class='bx bxs-right-arrow-alt'
                                                        id="ders"></i></li>
                                        <li class="totem" data-valor="1">LISTENING <i class='bx bxs-right-arrow-alt'
                                                        id="ders"></i></li>
                                        <li class="totem" data-valor="2">READING <i class='bx bxs-right-arrow-alt'
                                                        id="ders"></i></li>
                                        <li class="totem" data-valor="3">WRITING <i class='bx bxs-right-arrow-alt'
                                                        id="ders"></i></li>
                                        <li class="totem" data-valor="4">GRAMMAR <i class='bx bxs-right-arrow-alt'
                                                        id="ders"></i></li>
                                        <li class="totem" data-valor="5">VOCABULARY <i class='bx bxs-right-arrow-alt'
                                                        id="ders"></i></li>
                                </section>
                                <section class="accede">
                                        <p id="login" class="cd">Accede</p>
                                        <a href="" class="fr">Español <i class='bx bx-chevron-down'></i></a>
                                </section>
                        </section>
                </section>
                <section class="cuerpo-enca">
                        <section class="portaf">
                                <h2>Aprende Inglés rápido</h2>
                                <p>Aquí encontrarás todos los contenidos necesarios para aprender la lengua inglesa a tu
                                        ritmo.</p>
                                <input id="iSearch" type="text" placeholder="Introduce aquí el texto">
                                <i class='bx bx-search-alt-2'></i>
                        </section>
                </section>
        </header>
        <section class="senador" id="senador">
                <header>
                        <div class="encabe-new">
                                <h2>Temas de Listening</h2>
                                <p>Explora y disfruta de las actividades que tenemos para ti</p>
                        </div>
                        <div class="filtros">
                                <select id="niveles" required>
                                        <option value="#">Nivel de dificultad</option>
                                        <option value="1">A1</option>
                                        <option value="2">A2</option>
                                        <option value="3">B1</option>
                                </select>

                                <button id="limpiar">Limpiar contenido</button>
                        </div>
                </header>
                <section class="espaciadores">
                        <div class="scroll">
                                <section class="text-te" id="llegar-activi">
                                        <!-- LLEGADA DE ACTIVIADES DE MANERA DINAMICA -->
                                </section>
                        </div>
                </section>
        </section>
        <section class="padre" id="remplazar">
                <section class="cuerpo-some">
                        <h2> Cursos de inglés</h2>
                        <p>Estos son nuestros cursos de inglés listos para que empieces a aprender
                        </p>
                        <section class="destrutor">
                                <section class="contro">
                                        <section class="wer">
                                                <img src="assets/img/illu-basic-large.svg" alt="">
                                        </section>
                                        <section class="estupe">
                                                <h3>Nivel A1</h3>
                                                <p>Curso básico de inglés para los que están empezando.
                                                </p>
                                        </section>
                                </section>

                                <section class="contro">
                                        <section class="wer">
                                                <img src="assets/img/illu-intermedio-large.svg" alt="">
                                        </section>
                                        <section class="estupe">
                                                <h3>Nivel A2</h3>
                                                <p>Curso intermedio de inglés para los que dominan los conceptos básicos
                                                        del
                                                        lenguaje.
                                                </p>
                                        </section>
                                </section>

                                <section class="contro">
                                        <section class="wer">
                                                <img src="assets/img/illu-avanzado-large.svg" alt="">
                                        </section>
                                        <section class="estupe">
                                                <h3>Nivel B1</h3>
                                                <p>Curso para usuarios avanzados, para los que quieren perfeccionar su
                                                        inglés.
                                                </p>
                                        </section>
                                </section>
                        </section>
                </section>
                <section class="container_vocabulary">
                        <h1>vocabulary</h1>
                        <div >
                                <article>
                                        <div class="title_vocabulary">
                                                <h2>English vocabulary</h2>
                                                <h2>A1 CEFR</h3>
                                        </div>

                                        <ul class="option_vocabulary">
                                                <li>
                                                        Days of the week and months
                                                </li>
                                                <li>
                                                        Number and prices
                                                </li>
                                                <li>
                                                        Countries and nationalities
                                                </li>
                                        </ul>



                                </article>
                                <article></article>
                                <article></article>
                        </div>

                </section>
        </section>
        <section class="dome">
                <picture>
                        <source media="(min-width: 1280px)" type="image/svg+xml"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_1440.svg">
                        <source media="(min-width: 1024px)" type="image/svg+xml"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_1280.svg">
                        <source media="(min-width: 768px)" type="image/svg+xml"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_1024.svg">
                        <source media="(min-width: 481px)" type="image/svg+xml"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_768.svg">
                        <source media="(min-width: 321px)" type="image/svg+xml"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_480.svg">
                        <source class="b3Yrqyzc" type="image/svg+xml"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_320.svg">
                        <img class="b3Yrqyzc"
                                srcset="https://d1q4kshf6f0axi.cloudfront.net/hubpage/hero-images-2/svgs/hero_8_320.svg"
                                alt="">

                </picture>
                <section class="contaner">
                        <h2>La mejor manera de aprender inglés en linea</h2>
                        <p>Aprende inglés con nosotros Sena.lingua es practico, divertido y fácil</p>
                </section>
        </section>
        <section class="personas">
                <section class="adso">
                        <div class="contenta">
                                <div class="ftr">Tecnólogo a cargo</div>
                                <h2>Análisis y Desarrollo de Software para el Sector Servicios</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, facilis
                                        repellendus
                                        culpa rem nobis, aut architecto quaerat impedit explicabo dolore
                                        voluptatibus?
                                        Vel quibusdam veniam fuga voluptate dolor reiciendis eum error.</p>

                                <a href="https://adso24.com/web/" target="_blank">Conoce más de nosotros</a>
                        </div>
                        <div class="img-contan">
                                <img src="assets/img/WhatsApp Image 2023-09-21 at 7.13.22 AM.jpeg" alt="">
                        </div>
                </section>
                <section class="instru">
                        <section class="doshes">
                                <img src="assets/img/WhatsApp Image 2023-09-21 at 8.26.12 AM.jpeg" alt="">
                        </section>
                        <section class="casta">
                                <div>Instructor a cargo</div>
                                <h2>Diego Alejandro Peña Rojas</h2>

                                <li><i class='bx bxs-polygon'></i> Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit. Incidunt consequuntur aut expedita nostrum libero excepturi
                                        reiciendis
                                        sequi, temporibus, praesentium enim nesciunt totam aperiam ut ab facere
                                        odit.
                                        Similique, magnam ipsa?</li>
                                <li>
                                        <i class='bx bxs-polygon'></i> Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit. Incidunt consequuntur aut expedita nostrum libero excepturi
                                        reiciendis
                                        sequi, temporibus, praesentium enim nesciunt totam aperiam ut ab facere
                                        odit.
                                        Similique, magnam ipsa?
                                </li>
                                </li>
                                <li>
                                        <i class='bx bxs-polygon'></i> Lorem ipsum dolor sit amet consectetur
                                        adipisicing
                                        elit. Incidunt consequuntur aut expedita nostrum libero excepturi
                                        reiciendis
                                        sequi, temporibus, praesentium enim nesciunt totam aperiam ut ab facere
                                        odit.
                                        Similique, magnam ipsa?
                                </li>
                                </li>
                                <a href="https://adso24.com/web/" target="_blank">Perfil profesional</a>

                        </section>
                </section>
        </section>
        <section class="WERTW"></section>
        <footer class="footer">
                <article class="footer-logo">
                        <div>
                                <img src="assets/img/S_EN_A-WHITE.png" alt="Logo">
                        </div>
                        <p>© Copyrigth ADSO todos los derechos reservados</p>
                </article>


                <article class="footer-contact">
                        <h3>Contacto</h3>
                        <p>Email: contacto@example.com</p>
                        <p>Phone: +123456789</p>
                </article>

                <article class="footer-contact">
                        <h3>Más información de nuestros servicios</h3>
                        <a>Desarrollo de Software</a>
                        <a>Analisis de Servicios</a>
                        <a>Manejo de Excel</a>
                        <a>Incribirse a un curso</a>
                </article>

                <article class="footer-subscribe">
                        <h3>Subscribe</h3>
                        <form>
                                <input type="email" placeholder="E-mail address">
                                <button type="submit" class="button type1">
                                        <span class="btn-txt">Subscribe</span>
                                </button>

                        </form>
                </article>
        </footer>
        <script src="assets/js/login.js"></script>
        <script src="assets/js/acceso.js"></script>
        <script src="assets/js/menuResponsive.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>