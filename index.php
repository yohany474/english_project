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
                        <div>
                                <article>
                                        <div class="title_vocabulary">
                                                <h2>English vocabulary</h2>
                                                <h2>A1 CEFR</h2>
                                        </div>

                                        <ul class="option_vocabulary">
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1pBgkHMuIMzXauFM4OArkVOaJRSATE4qn/view?usp=sharing"
                                                                target="_blank">Days of the week and months</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1Ua3OXNiaxGymZleN_kFTsbda_PBmxYI1/view?usp=sharing"
                                                                target="_blank">Number and prices</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1CZXq6Le6PCvEVGxXMZbzME_k0hV3iucL/view?usp=sharing"
                                                                target="_blank">Countries and nationalities</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/18nlEvKclmnHpc_DyfVeW9uG3ugXYkUMv/view?usp=sharing"
                                                                target="_blank">Colors</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1V2CMSRuZsngfJHdTm0l_BZO5W-r_-Iyp/view?usp=sharing"
                                                                target="_blank">Personal Possessions</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1WGcre7dVGzYOQvL-SMBWjXtNB-3nPwNU/view?usp=sharing"
                                                                target="_blank">Parts of the body</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1mpBmtxYH60XF3q2MkO00QMdempblq3fj/view?usp=sharing"
                                                                target="_blank">Family and Friends</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1D2-KVxniomiC9VibWrnxQGLli7GPtzBj/view?usp=sharing"
                                                                target="_blank">Food and Drinks</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1fbgUdEuWdqZKLul0LukBvwm0_2aNkj6t/view?usp=sharing"
                                                                target="_blank">Household Rooms and Objects</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1nwbwVRtGsw1XcMe8Gf9osc_kfw9t86yX/view?usp=sharing"
                                                                target="_blank">Clothes</a>
                                                </li>


                                        </ul>



                                </article>
                                <article>
                                        <div class="title_vocabulary">
                                                <h2>English vocabulary</h2>
                                                <h2>A2 CEFR</h2>
                                        </div>

                                        <ul class="option_vocabulary">
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1gSQRh3RutP9AJvBclSx0HARhBx3ZrzRL/view?usp=sharing"
                                                                target="_blank">Feelings and emotions</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/10kZ6Ve_JgEdyjB0slCTs86vBM-SpVeCO/view?usp=sharing"
                                                                target="_blank">Food and Drinks</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1kA-VjoTj9XeKQCvDC6ezZMticmpjLjQO/view?usp=sharing"
                                                                target="_blank">Education</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1EPlWhtd5e9QEcUqPXFZav_zbjkaB9fqg/view?usp=sharing"
                                                                target="_blank">Jobs</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1DAWNBkSiejc87xaboxx594d-pou0zUVv/view?usp=sharing"
                                                                target="_blank">Weather</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1zHAQvjhRqE26BWajlMOiix8AOY-TqemO/view?usp=sharing"
                                                                target="_blank">Family and Friends</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1jqp2aDZGOcbiDaHKy4RTusxLxclbw9_j/view?usp=sharing"
                                                                target="_blank">Daily routines</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1EvNPUlM5IGIv946wfCrGmgOXKfLLO5J2/view?usp=sharing"
                                                                target="_blank">Free-time Activities</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1Vl5q1Zn-jivevhafjKz2L722boQcKuKB/view?usp=sharing"
                                                                target="_blank">Places in Town</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1uXHYiUDg1LkRmGTFv4zjck_YA08xbKo7/view?usp=drive_link"
                                                                target="_blank">Body and Health</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1ogUaRovtdDc89lJZEx1mVfA6tOCm0Ex7/view?usp=sharing"
                                                                target="_blank">Transport and Travel</a>
                                                </li>


                                        </ul>
                                </article>
                                <article>
                                        <div class="title_vocabulary">
                                                <h2>English vocabulary</h2>
                                                <h2>B1 CEFR</h2>
                                        </div>

                                        <ul class="option_vocabulary">
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1MSSJuXf0XAVn51HJY0w6R3YXxDTVUg5O/view?usp=sharing"
                                                                target="_blank">Education</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1kuYMAhRKpjVQT8v2d8Xq_Xo_qkSZegtQ/view?usp=sharing"
                                                                target="_blank">Emotions</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1k6kpeEcfdZbwSP1SYiwMtqnNS6cbPYEV/view?usp=sharing"
                                                                target="_blank">Entertainment</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1UvIj9rxMk3TmUq7Qshr7gPKQd53eCYlx/view?usp=sharing"
                                                                target="_blank">Leisure Activities</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/181OdRP7ZH4DOqINRwRfhosfxbIjfmgcJ/view?usp=sharing"
                                                                target="_blank">News and Media </a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1tETWGlYh5TzuhmExJNJPe77PcFBbhccy/view?usp=sharing"
                                                                target="_blank">Sports, health and Fitness</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1sLmMi6EW0WNWA1pnk5GwKCQhWg25K5Y0/view?usp=sharing"
                                                                target="_blank">Technology</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1tdnDQ4tKwSdK-ocwDSzPEuej5hoDgtw1/view?usp=sharing"
                                                                target="_blank">Time Expresion for the Future</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/1L0E6TDSDoYP5_OliT_VkKPnOOAcZfTUD/view?usp=sharing"
                                                                target="_blank">Time Expressions for the Past</a>
                                                </li>
                                                <li>
                                                        <a href="https://drive.google.com/file/d/19AcAXelqAcFmM_onHclC6hmbqYX-VqBJ/view?usp=sharing"
                                                                target="_blank">Travel and Transport</a>
                                                </li>




                                        </ul>
                                </article>
                        </div>

                </section>
                <section class="bank_words">
                        <h1>
                                TECHNICAL VOCABULARY FOR SENA PROGRAMS
                        </h1>
                        <div class="columns">
                                <ul>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1C6CVHF34KK6TzWWuSU1lsF4LgqGpo9SQ/view?usp=sharing"
                                                        target="_blank">3D
                                                        Animation</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1fHlWUTw3Hl7ytebenorhKRqgNvHPFB02/view?usp=sharing"
                                                        target="_blank">Accounting
                                                        and Financial Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1Vcyc2QKXD8b5mx-hLF8cG8xbVDje59t-/view?usp=sharing"
                                                        target="_blank">Accounting
                                                        For Commercial and Financial Transactions</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1WY_8-n08p5l7d62wx__2Kg8kOcdgSyG1/view?usp=sharing"
                                                        target="_blank">Administrative
                                                        Assistance</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1lpTMlQK1k9f6v8dTaUDXN5dnPd3aHKNt/view?usp=sharing"
                                                        target="_blank">Agricultura
                                                        Business Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1H1hUdjdXsPZxAfToTJNneh-ixP7W6M4a/view?usp=sharing"
                                                        target="_blank">Agricultural
                                                        Crops</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1vGhnRecX91MPsQ8ykytlogg6k96IBrOY/view?usp=sharing"
                                                        target="_blank">Agricultural
                                                        Projects</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1nQxu32If3peJuH80mmoKCG_gUATR7d2w/view?usp=sharing"
                                                        target="_blank">Aquaculture</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1iG7OUZjhTWfNL_GPeACBLP-152Hc86_a/view?usp=sharing"
                                                        target="_blank">Assistance
                                                        and Organization of Archives</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1MVVYb6P0ACUUuv4VGFbm141FkBKXy2kw/view?usp=sharing"
                                                        target="_blank">Bakery</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1b2sMiezKkf7UHRnEz8DsPSlQkUBM-yKt/view?usp=sharing"
                                                        target="_blank">Building
                                                        Construction</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1TmTKSpO8SgcAtKyLjc8_kgttokx2KnCz/view?usp=sharing"
                                                        target="_blank">Business
                                                        Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1INddRuJ-fVgH3RvHAjr8TxvExGIeqP9A/view?usp=sharing"
                                                        target="_blank">Cattle
                                                        Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1EZjrwrRIR7WssbdRcXmThCnLyXNbE75R/view?usp=sharing"
                                                        target="_blank">Cattle
                                                        Production</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1j_pz7IADIm7rYacsv4TcsOsPqQ6Fubnj/view?usp=sharing"
                                                        target="_blank">Cooking
                                                        and kitchen</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1f3iJb0C3nsHtbx2bhxWwWAMISOmdGI-e/view?usp=sharing"
                                                        target="_blank">Dairy
                                                        Processing</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1Q5OW-CA1YdaZfNI5pDTmgM5iiL5cx6hE/view?usp=sharing"
                                                        target="_blank">Digital
                                                        Content Integration</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1pzZWouOUPeBSsQj_fSBnGBip4ve277cS/view?usp=sharing"
                                                        target="_blank">Document
                                                        Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1VyNFGvpvmU4hsjGE2O9uDLeQ8bWqDbYU/view?usp=sharing"
                                                        target="_blank">Ecologial
                                                        Farming Systems</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1nfxXZPrTui0yZ6TjIJ6yR143tSkmoTw2/view?usp=sharing"
                                                        target="_blank">Electrical
                                                        and Electronic Maintenance of Motor Vehicles</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1ganm7GTL0N0O-JLdK7JfLzjSupjC-0wJ/view?usp=sharing"  target="_blank" >Local Tourism Operations</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1VvPPLS7gLHyjqvXEOho-NlFgNLT-KYHl/view?usp=sharing"  target="_blank">Maintenance and Installation of Air Conditioning</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1sbZ91EvaGM--alw7N5vARhBZJCt_sbbc/view?usp=sharing"  target="_blank">Musical Performance</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1vFBtDajaROOmHfKCCOsbORWVpbzsICd5/view?usp=sharing"  target="_blank">Public Health</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1Qgtx9Bber6Vb2g1SyK3d5n_JvkXigSJk/view?usp=sharing"  target="_blank">Tourism Guiadance</a>
                                        </li>

                                </ul>

                                <ul>

                                        <li>
                                                <a href="https://drive.google.com/file/d/1vDEA-14uWkg5IVb1G_M7E2CZ2rNWYVv8/view?usp=sharing"
                                                        target="_blank">Enviroment
                                                        Monitoring</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1sFU83Htew3ov8cEO77gWPQn2nGBVD1ks/view?usp=sharing"
                                                        target="_blank">Food
                                                        Proccesing </a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/18EwI9nrGIly9kyiJ0xaer8n-yXEFZune/view?usp=sharing"
                                                        target="_blank">Health
                                                        Administrative Support</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/12kfLwGtX4GfsQFzuJsPAGDyIVBYbra87/view?usp=sharing"
                                                        target="_blank">Human
                                                        Resources</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1674ppoU_WhiAt7NSPlnwMnatY-x0ZmBR/view?usp=sharing"
                                                        target="_blank">Human
                                                        Talent Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1MGy5mS1RWQ4LoFbNKavuk_oX2IL0TwAr/view?usp=sharing"
                                                        target="_blank"> Livestock
                                                        Production</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1N7RfV29GU0Iji0ykSJrFqD8yKhvkiNbz/view?usp=sharing"
                                                        target="_blank">Maintenance
                                                        of Diesel Engines</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1rabmoBhxmmZ6ywLxqHLaRh_Bp40DP2NC/view?usp=sharing"
                                                        target="_blank">Market
                                                        Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/18k29RyfOC6J_rLsqSI4aPZRNVXAvrJ-7/view?usp=sharing"
                                                        target="_blank">Meat
                                                        Processing</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1lqueVXLfmMkmGwW3oligjMao-LcYqPYd/view?usp=sharing"
                                                        target="_blank">Network
                                                        Installation</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1KLkOHY3vkCc-lQuMVNfXFnwnJmourOkv/view?usp=sharing"
                                                        target="_blank">Nursery
                                                        Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1p8mxPIz1f-Yzpn4zd-Xb5b3kKITpSxVu/view?usp=sharing"
                                                        target="_blank">Nursing</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/15YAR6phBYxB20cc1tit_UOylt5n2mq9I/view?usp=sharing"
                                                        target="_blank">Pharmaceutical
                                                        Services</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1a5gmYEVm4vdrV2FAlAjJCjtDOaqOMFRQ/view?usp=sharing"
                                                        target="_blank">Software
                                                        Analysis and Development</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1dOLxwCx08vm9E7Z6CAWnkV3ucm2fZAQd/view?usp=sharing"
                                                        target="_blank">Sport
                                                        Training</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/18cwGZ9TiECj0sflUjlV1bPXVEYZ1mlo8/view?usp=sharing"
                                                        target="_blank">Systems</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1EvT-rZv6fRMKrfedzKJ9hokGCY7rUghu/view?usp=sharing"
                                                        target="_blank">The
                                                        Implementation of Sporting and Recreational Events</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1KiE7fNt7kGsz6yoC87pCPZBaWICClIbm/view?usp=sharing"
                                                        target="_blank">Production
                                                        of minor Species</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1qFg6klT6bUAPqPu3cE-gCSnxCBxUw082/view?usp=sharing"
                                                        target="_blank">Wastewater
                                                        Treatment</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1nnlgArij2kARkAtDxbRzj6_nlC69_IzD/view?usp=sharing"
                                                        target="_blank">Welding
                                                        of Metallic Products</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1C1uwLg8dsV-13e1PQQVe_hu9gQtU9otg/view?usp=sharing"
                                                        target="_blank">Administrative Management</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1KE6ORGui25-kzj59gErMXHxfND8FXoa7/view?usp=sharing"
                                                        target="_blank">Cabinetmaking</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1BE8gSkX4m1vDYfjatv4DdZaUe89hv12Y/view?usp=sharing"
                                                        target="_blank">Dancing Performance</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1TisAEFI2AXDbfirzulJUq5rNAhB3o3lw/view?usp=sharing"
                                                        target="_blank">Installation and Maintenance of Electrical of
                                                        Solar Panels and Photovoltaic Grids</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1vf1C8iUViKyByHm94NP3Jl7uxGCxsY7n/view?usp=sharing"
                                                        target="_blank">Installation of Electrical Network</a>
                                        </li>

                                </ul>

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