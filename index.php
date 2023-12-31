<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="shortcut icon" href="assets/img/S_EN_A.png" type="image/x-icon">
        <link rel="stylesheet" href="./assets/css/cards_vocabulary.css">
        <link rel="stylesheet" href="assets/css/preguntasListening.css">
        <link rel="stylesheet" href="assets/css/carga.css">
        <link rel="stylesheet" href="assets/css/cardResult.css">
        <script src="https://kit.fontawesome.com/0015840e45.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Aprende ingles Sena ingles</title>
</head>

<body id="body">



        <div id="dark" class="urr"></div>
        <div id="container_login">
                <form class="form" id="acceso" method="post">
                        <p class="form-title">Sign in to your account</p>
                        <div class="input-container">
                                <input type="number" name="id" id="id" placeholder="Enter DNI">
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
                                <img src="assets/img/S_EN_A-WHITE.png" alt="" id="miImagen">
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
                                        <p id="login" class="cd">Sign in</p>
                                        <a href="" class="fr">Spanish <i class='bx bx-chevron-down'></i></a>
                                </section>
                        </section>
                </section>
                <section class="cuerpo-enca" id="headerP">
                        <section class="portaf">
                                <h2>Empower Your English, Unleash Your Potential</h2>
                                <p>SENA, your Path to English Excellence</p>

                        </section>
                </section>
        </header>

        <!-- Btn para redirigir al inicio -->
        <a id="subir" href="#headerP">
                <i class="fa-solid fa-arrow-up"></i>
        </a>
        <section class="senador" id="senador">
                <header>
                        <div class="encabe-new">
                                <h2 style="display: flex; gap: .2em;"><div id="Title"></div> topics</h2>
                                <p>Explore and enjoy the activities we have for you.</p>
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
                        <h2>English Levels</h2>
                        <p>These are our English courses ready for you to start learning English
                        </p>
                        <section class="destrutor">
                                <section class="contro" data-nivel="1">
                                        <section class="wer">
                                                <img src="assets/img/auno.jpg" alt="">
                                        </section>
                                        <section class="estupe">
                                                <h3>A1 Level</h3>
                                                <p>Basic English course for beginners.
                                                </p>
                                        </section>
                                </section>

                                <section class="contro" data-nivel="2">
                                        <section class="wer">
                                                <img src="assets/img/ados.jpg" alt="">
                                        </section>
                                        <section class="estupe">
                                                <h3>A2 Level</h3>
                                                <p>Intermediate English course for those who have mastered the basics of
                                                        English
                                                        of
                                                        language.
                                                </p>
                                        </section>
                                </section>

                                <section class="contro" data-nivel="3">
                                        <section class="wer">
                                                <img src="assets/img/buno.jpg" alt="">
                                        </section>
                                        <section class="estupe">
                                                <h3>B1 Level</h3>
                                                <p>Course for advanced users, for those who want to perfect their
                                                        English.

                                                </p>
                                        </section>
                                </section>
                        </section>
                </section>
                <section class="temas-space">
                        <section class="tarjetas" id="tarjetasMaster">
                                <section class="terget" data-level=" " data-clase="1">
                                        <section class="target-bb">
                                                <i class="fas fa-headphones" style="color: #51a8ff;"></i>
                                        </section>
                                        <section class="target-text azul">
                                                <h2>Listening</h2>
                                                <p>The ability to hear and comprehend speech and sounds in a language.
                                                </p>
                                        </section>
                                </section>
                                <section class="terget" data-level=" " data-clase="2">
                                        <section class="target-bb">
                                                <i class="fas fa-book-open" style="color: #ff6961;"></i>
                                        </section>
                                        <section class="target-text red">
                                                <h2>Reading</h2>
                                                <p>The ability to understand and process written text in a language.</p>
                                        </section>
                                </section>
                                <section class="terget" data-level=" " data-clase="3">
                                        <section class="target-bb">
                                                <i class="fas fa-pencil-alt" style="color: #ffbb00;"></i>
                                        </section>
                                        <section class="target-text amar">
                                                <h2>Writing</h2>
                                                <p>The ability to express thoughts and words through writing in a
                                                        language.</p>
                                        </section>
                                </section>
                                <section class="terget" data-level=" " data-clase="4">
                                        <section class="target-bb">
                                                <i class="fas fa-book" style="color: #45d3a6;"></i>
                                        </section>
                                        <section class="target-text">
                                                <h2>Grammar</h2>
                                                <p> The rules and structures governing sentence construction and word
                                                        formation in a language.</p>
                                        </section>
                                </section>
                        </section>

                        <section class="aplicar" id="septionTraer">
                                <section class="afro">
                                        <button id="limpiarEste">Elegir otro tema</button>
                                </section>
                                <section class="espace-aplicar" id="Aplicar">

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
                                                <a href="https://drive.google.com/file/d/1ganm7GTL0N0O-JLdK7JfLzjSupjC-0wJ/view?usp=sharing"
                                                        target="_blank">Local Tourism Operations</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1VvPPLS7gLHyjqvXEOho-NlFgNLT-KYHl/view?usp=sharing"
                                                        target="_blank">Maintenance and Installation of Air
                                                        Conditioning</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1sbZ91EvaGM--alw7N5vARhBZJCt_sbbc/view?usp=sharing"
                                                        target="_blank">Musical Performance</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1vFBtDajaROOmHfKCCOsbORWVpbzsICd5/view?usp=sharing"
                                                        target="_blank">Public Health</a>
                                        </li>
                                        <li>
                                                <a href="https://drive.google.com/file/d/1Qgtx9Bber6Vb2g1SyK3d5n_JvkXigSJk/view?usp=sharing"
                                                        target="_blank">Tourism Guiadance</a>
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
                        <!-- <source media="(min-width: 1280px)" type="image/svg+xml"
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
                                src="assets/img/banner.png"> -->
                        <img class="b3Yrqyzc" src="assets/img/bannerkk.png" alt="" height="100px">

                </picture>
                <section class="contaner">
                        <h2>Unlock the World with Fluent English through SENA.</h2>
                        <p>Fluent English, Global Impact – SENA Leads the Way</p>
                </section>
        </section>
        <section class="personas">
                <section class="adso">
                        <div class="contenta">
                                <div class="ftr">Group in charged</div>
                                <h2>Software analysis and development for the services sector</h2>
                                <p>The presence of this established software analysis and development group is paramount
                                        in various domains including business, commerce, and education. Specifically, in
                                        Florencia,
                                        Caquetá, at the Servicio Nacional de Aprendizaje (SENA), such a group is equally
                                        vital in
                                        English language teaching. This team plays a relevant role in creating
                                        customized
                                        software
                                        solutions tailored to the unique needs of learners and educators. These
                                        applications facilitate
                                        efficient language acquisition, interactive lessons, and progress tracking,
                                        enhancing the overall
                                        quality of English language education. <!-- In an increasingly digital world, the importance of this group
                                 cannot be overstated, as it empowers institutions like SENA to stay current and effective in their
                                  educational endeavors.--></p>

                                <a href="https://adso24.com/web/" target="_blank">More about us</a>
                        </div>
                        <div class="img-contan">
                                <img src="assets/img/WhatsApp Image 2023-09-21 at 7.13.22 AM.jpeg" alt="">
                        </div>
                </section>
                <section class="instru">
                        <section class="doshes">
                                <img src="assets/img/IMG-20221117-WA0051.jpg" alt="">
                        </section>
                        <section class="casta">

                                <h2>Purpose</h2>

                                <li style="list-style: none;">The fundamental purpose of this web page is to provide
                                        valuable support to the SENA community in their journey to elevate their English
                                        language skills. Through a rich collection of resources, interactive activities,
                                        and a diverse range of engaging topics, we aim to empower individuals to excel
                                        in English as a foreign language, fostering their personal and professional
                                        growth. Our commitment to facilitating language mastery underscores our
                                        dedication to the SENA community's success in the realm of English proficiency.
                                </li>

                        </section>
                </section>
        </section>
        <section class="WERTW"></section>
        <footer class="footer">
                <article class="footer-logo">
                        <div>
                                <img src="assets/img/S_EN_A-WHITE.png" alt="Logo">
                        </div>
                        <p>© Copyright ADSO, all rights reserved</p>
                </article>

                <article class="footer-contact">
                        <!-- Image of the PO -->
                        <img src="assets/img//WhatsApp Image 2023-09-21 at 8.26.12 AM.jpeg" alt="" class="imgPo">
                        <h3>Contact</h3>
                        <p>Diego Alejandro Peña Rojas</p>
                        <p>Bilingual Project Instructor</p>
                        <p>SENA Regional-Caquetá</p>
                        <p>dapena@sena.edu.co</p>

                </article>

                <article class="footer-contact">
                        <h3>More information about our services</h3>
                        <a>Software Development</a>
                        <a>Service Analysis</a>
                        <a>Excel Handling</a>

                </article>

                <article class="footer-subscribe">
                        <img src="assets/img/sena.png" alt="" width="150px" height="150px">
                </article>
        </footer>

        <!-- Resultados de la actvidad -->
        <section id="ventanaResult" class="ventanasYo">
                <div class="results-summary-container">
                        <div class="confetti">
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                        </div>
                        <div class="results-summary-container__result">
                                <div class="heading-tertiary">Your Result</div>
                                <div class="result-box">
                                        <div class="heading-primary" id="respuestasCorrectas"></div>
                                        <p class="result" id="totalPreguntas"></p>
                                </div>
                                <div class="result-text-box">
                                        <div class="heading-secondary" id="calification"></div>
                                        <p class="paragraph" id="respuestasIncorrectas"></p>
                                </div>
                                <div class="summary__cta">
                                        <button class="btnR btn__continue" onclick="ocultarVentanaResult()">Continue
                                        </button>
                                        <button id="consultarPreguntasCorrectasIncorrectas" data-mostrarRTA=""
                                                onclick="mostrarRespuestasCorrecta();" class="btnR btn__continue"
                                                onclick="">Correct Answers
                                        </button>
                                </div>
                        </div>
                </div>
        </section>
        <!-- Resultados de la actvidad -->


        <!-- Ventana de respuestas correctas e incorrectas -->
        <section class="ventanasYo" id="respuestasCorrectasInco">
                <article id="contenedorRespuestasServidor">

                </article>
        </section>
        <!-- Ventana de respuestas correctas e incorrectas -->

        <!-- Ventana de carga -->
        <div class="" id="carga">
                <div>
                        <svg height="108px" width="108px" viewBox="0 0 128 128" class="loader">
                                <defs>
                                        <clipPath id="loader-eyes">
                                                <circle transform="rotate(-40,64,64) translate(0,-56)" r="8" cy="64"
                                                        cx="64" class="loader__eye1"></circle>
                                                <circle transform="rotate(40,64,64) translate(0,-56)" r="8" cy="64"
                                                        cx="64" class="loader__eye2"></circle>
                                        </clipPath>
                                        <linearGradient y2="1" x2="0" y1="0" x1="0" id="loader-grad">
                                                <stop stop-color="#000" offset="0%"></stop>
                                                <stop stop-color="#fff" offset="100%"></stop>
                                        </linearGradient>
                                        <mask id="loader-mask">
                                                <rect fill="url(#loader-grad)" height="128" width="128" y="0" x="0">
                                                </rect>
                                        </mask>
                                </defs>
                                <g stroke-dasharray="175.93 351.86" stroke-width="12" stroke-linecap="round">
                                        <g>
                                                <rect clip-path="url(#loader-eyes)" height="64" width="128"
                                                        fill="hsl(193,90%,50%)"></rect>
                                                <g stroke="hsl(193,90%,50%)" fill="none">
                                                        <circle transform="rotate(180,64,64)" r="56" cy="64" cx="64"
                                                                class="loader__mouth1"></circle>
                                                        <circle transform="rotate(0,64,64)" r="56" cy="64" cx="64"
                                                                class="loader__mouth2"></circle>
                                                </g>
                                        </g>
                                        <g mask="url(#loader-mask)">
                                                <rect clip-path="url(#loader-eyes)" height="64" width="128"
                                                        fill="hsl(223,90%,50%)"></rect>
                                                <g stroke="hsl(223,90%,50%)" fill="none">
                                                        <circle transform="rotate(180,64,64)" r="56" cy="64" cx="64"
                                                                class="loader__mouth1"></circle>
                                                        <circle transform="rotate(0,64,64)" r="56" cy="64" cx="64"
                                                                class="loader__mouth2"></circle>
                                                </g>
                                        </g>
                                </g>
                        </svg>
                </div>
                <h3>Loading...</h3>
        </div>

        <section class="sofes" id="SOF">
        </section>
        <script src="assets/js/login.js"></script>
        <script src="assets/js/acceso.js"></script>
        <script src="assets/js/menuResponsive.js"></script>
        <script src="assets/js/llamarActividadNivel.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>