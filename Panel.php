<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/0015840e45.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="assets/css/panel.css" />
  <link rel="stylesheet" href="assets/css/ventanaCrearActividades.css" />
  <title>Panel Admin</title>
</head>

<<<<<<< HEAD:Panel.html
<body id="body">
=======
<body>

  <section class="itad" id="productos">
    <section class="activi">
      <header>
        <h2>Actividades</h2>
        <div id="x3">
          X
        </div>
      </header>
      <section class="fot">
        <div class="fores">
          <input type="search" placeholder="Buscar actividad">
        </div>
        <div class="scroll" id="QERT">
          <!-- CARGAR TODAS LAS ACTIVIADES DEL FILTRO -->
        </div>
      </section>
    </section>
    <section class="wer" id="WAER">
      <!-- Contenedor para subir el archivo -->
    </section>
  </section>

>>>>>>> fa6a3f4e0b24af4714b3be1ac7944a5b058fc9e7:Panel.php
  <header id="header">
    <img src="assets/img/logo.png" alt="" class="logo" />
    <div class="header_right">
      <i class="fa-solid fa-magnifying-glass" id="iconoSearch"></i>
      <input type="search" name="" id="buscarContenido" placeholder="Buscar" />

      <span>
        <i class="fa-solid fa-share-from-square"></i>
        <p>Compartir</p>
      </span>

      <span>
        <i class="fa-solid fa-user"></i>
        <p>Usuario</p>
      </span>
    </div>

    <div id="iconoMenu">
      <div id="desplegarMenu" class="">
        <i class="fa-solid fa-bars"></i>
      </div>

      <div id="cerrarMenu" class="">
        <i class="fa-solid fa-x"></i>
      </div>
    </div>
  </header>

  <!-- Main -->
  <main id="mainPrincipal">
    <aside id="asideMenu">
      <div id="Inic" class="button" onclick="mostrarContenedoresMenu('Inicio', this)">
        <i class="fa-solid fa-home"></i>
        <p>Inicio</p>
      </div>

      <div id="gram" class="button" onclick="mostrarContenedoresMenu('Grammar', this)">
        <i class="fa-solid fa-book"></i>
        <p>Grammar</p>
      </div>

      <div id="wri" class="button" onclick="mostrarContenedoresMenu('Writing', this)">
        <i class="fas fa-pencil"></i>
        <p>Writing</p>
      </div>

      <div id="read" class="button" onclick="mostrarContenedoresMenu('Reading', this)">
        <i class="fas fa-book-open"></i>
        <p>Reading</p>
      </div>

      <div id="list" class="button" onclick="mostrarContenedoresMenu('Listening', this)">
        <i class="fas fa-headphones"></i>
        <p>Listening</p>
      </div>

      <!-- <div id="voca" class="button" onclick="mostrarContenedoresMenu('Vocabulary', this)">
        <i class="fas fa-language"></i>
        <p>Vocabulary</p>
      </div> -->

      <!-- Banner -->

      <section class="botones_cont_bottom">
        <img src="assets/img/banner.png" alt="" class="banner" />
        <button id="cerrar_sesion" class="button singOut">
          <i class="fa-solid fa-right-from-bracket"></i>
          <p>Sing out</p>
        </button>
      </section>
    </aside>

    <section id="page">
      <div id="rutaActual">
        <p onclick="mostrarContenedoresMenu('Inicio', 'Inic')">INICIO /</p>
        <p id="ruta"></p>
      </div>

      <section class="paginas contenedorActive" id="Inicio">

        <section id="ContainerCardInicio">

          <article class="cardActivities actiGrammar">
            <span class="cardActivitiesIcono">
              <i class="fas fa-book" style="color: #45d3a6;"></i>
              <p>Grammar</p>
            </span>
            <span style="background-color: #45d3a6;">12 Activities</span>
            <span class="cardActivitiesEnlace" style="background-color: #7bd8ba;">
              <a href="#">Ver contenido</a>
              <a href="#">Ver estadísticas</a>
            </span>
          </article>

          <article class="cardActivities actiWritting">
            <span class="cardActivitiesIcono">
              <i class="fas fa-pencil-alt" style="color: #ffd600;"></i>
              <p>Writing</p>
            </span>
            <span style="background-color: #ffd600;">12 Activities</span>
            <span class="cardActivitiesEnlace" style="background-color: #fcdf96;">
              <a href="#">Ver contenido</a>
              <a href="#">Ver estadísticas</a>
            </span>
          </article>

          <article class="cardActivities actiReading">
            <span class="cardActivitiesIcono">
              <i class="fas fa-book-open" style="color: #ff6961;"></i>
              <p>Reading</p>
            </span>
            <span style="background-color: #ff6961;">12 Activities</span>
            <span class="cardActivitiesEnlace" style="background-color: #ffbfb0;">
              <a href="preguntasReading.php">Ver contenido</a>
              <a href="#">Ver estadísticas</a>
            </span>
          </article>

          <article class="cardActivities actiListening">
            <span class="cardActivitiesIcono">
              <i class="fas fa-headphones"></i>
              <p>Listening</p>
            </span>
            <span>12 Activities</span>
            <span class="cardActivitiesEnlace">
              <a href="preguntasListening.PHP">Ver contenido</a>
              <a href="#">Ver estadísticas</a>
            </span>
          </article>

        </section>
        <section class="oficinista">
          <header>
            Actulizar productos
          </header>
          <section class="carot" id="tore">
            <div>
              <section class="dares" data-clase="4">Grammar</section>
              <section class="dares" data-clase="3">Writing</section>
              <section class="dares" data-clase="2">Reading</section>
              <section class="dares" data-clase="1">Listening</section>
            </div>
          </section>
        </section>

      </section>

      <section class="paginas" id="Grammar">
        <h2>Grammar</h2>
        <form action="" id="ventanaFormGrammar" method="post" class="formulario-ejercicio"
          enctype="multipart/form-data">
          <section class="deanvulo">
            <div class="id">
              <label for="IDnivel">ID de Nivel:</label>
              <select id="IDnivel" name="nivel" style="width: 4rem;">
                <option value="1">A1</option>
                <option value="2">A2</option>
                <option value="3">B1</option>
              </select>
            </div>
            <div class="tit">
              <label for="titulo">Título del Ejercicio:</label>
              <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="ar">
              <label for="titulo">Archivo de ejemplo:</label>
              <input type="file" id="titulo" name="Archivo" accept=".pdf" required>
            </div>
          </section>

          <label for="secrip-corta">Descripción Corta:</label>
          <textarea id="secrip-corta" name="secrip-corta"></textarea>


          <label for="title"> Cantidad de preguntas</label>
          <input type="number" name="cantidadPreguntas" id="cantidadPreguntasG" />

          <section id="contenedorPreguntasG" class="frt"></section>

          <button type="submit" id="">Crear Ejercicio Grammar</button>
        </form>
      </section>

      <section class="paginas" id="Writing">
        <h2>Writing</h2>
        <form action="./controller/CrearWriting.php" method="post" class="formulario-ejercicio">

          <label for="IDnivel">ID de Nivel:</label>
          <select id="IDnivel" name="IDnivel">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
          </select>

          <label for="titulo">Título del Ejercicio:</label>
          <input type="text" id="titulo" name="titulo" required>


          <label for="secrip-corta">Descripción Corta:</label>
          <textarea id="secrip-corta" name="secrip-corta"></textarea>


          <label for="contenido">Contenido del Ejercicio:</label>
          <textarea id="contenido" name="contenido" rows="5" required></textarea>

          <label for="palabras-clave">Palabras Clave (separadas por comas):</label>
          <input type="text" id="palabras-clave" name="palabras-clave" required>


          <button type="submit">Crear Ejercicio Writing</button>
        </form>
      </section>

      <section class="paginas" id="Reading">
        <form action="" id="ventanaFormReading" enctype="multipart/form-data" method="post">
          <main id="mainReading">
            <div class="rowWrap">
              <div class="itemForm" style="width: 4rem;">
                <label for="Nivel">Nivel</label>
                <select name="nivel" id="">
                  <option value="1">A1</option>
                  <option value="2">A2</option>
                  <option value="3">B1</option>
                </select>
              </div>


              <div class="itemForm">
                <label for="title">Titulo de actividad</label>
                <input type="text" name="titulo" id="title" required />
              </div>




              <div class="itemForm" required>
                <label for="title">Cantidad de preguntas</label>
                <input type="number" name="cantidadPreguntas" id="cantidadPreguntasR" />
              </div>
            </div>

            <div class="rowWrap">

              <div class="itemForm">
                <label for="Imagen">Imagen de actividad</label>
                <input type="file" name="imagen" id="Imagen" accept="image/*" required />
              </div>

              <div class="itemForm">
                <label for="Nivel">Instrucciones</label>
                <textarea name="instruccionReading" id="" cols="30" rows="10"
                  style="resize: none; height: 2.5rem;"></textarea>
              </div>


              <div class="itemForm">
                <label for="text">Ingrese el texto</label>
                <textarea name="texto" id="text" cols="0" rows="3"></textarea>
              </div>
            </div>

            <!-- Contenedor para crear dinámicamente las preguntas -->

            <section id="contenedorPreguntasR" style="height: 12rem !important"></section>
          </main>
          <div class="rowWrap">
            <button type="submit">Guardar actividad Reading</button>
          </div>
        </form>
      </section>

      <section class="paginas" id="Listening">
        <form action="" id="ventanaFormListening" enctype="multipart/form-data" method="post">
          <main id="mainListening">

            <div class="rowWrap">
              <div class="itemForm" style="width: 4rem;">
                <label for="Nivel">Nivel</label>
                <select name="nivel" id="">
                  <option value="1">A1</option>
                  <option value="2">A2</option>
                  <option value="3">B1</option>
                </select>
              </div>


              <div class="itemForm">
                <label for="title">Titulo de actividad</label>
                <input type="text" name="titulo" id="title" required />
              </div>




              <div class="itemForm" required>
                <label for="title"> Cantidad de preguntas</label>
                <input type="number" name="cantidadPreguntas" id="cantidadPreguntasL" />
              </div>
            </div>

            <div class="rowWrap">
              <div class="itemForm">
                <label for="audio">Audio de actividad</label>
                <input type="file" name="audio" id="audio" accept=".mp3" required />
              </div>

              <div class="itemForm">
                <label for="Nivel">Descripcion audio</label>
                <textarea name="descripcionaudio" id="" cols="30" rows="10"
                  style="resize: none; height: 3rem;"></textarea>
              </div>
            </div>

            <!-- Contenedor para crear dinamicamente las preguntas -->

            <section id="contenedorPreguntasL"></section>
          </main>
          <div class="rowWrap">
            <button type="submit">Guardar actividad listening</button>
          </div>
        </form>
      </section>

      <section class="paginas" id="Vocabulary">
        <h2>Vocabulary</h2>
      </section>
    </section>
  </main>

  <script src="assets/js/menuInteractivo.js"></script>
  <script src="assets/js/generarPreguntasListening.js"></script>
  <script src="assets/js/generarPreguntasReading.js"></script>
  <script src="assets/js/generarPreguntasGrammar.js"></script>
  <script src="assets/js/enviarListening.js"></script>
  <script src="assets/js/enviarReading.js"></script>
  <script src="assets/js/enviarGrammar.js"></script>
  <script src="assets/js/PanelLlamado.js"></script>
  <script src="assets/js/cerrar.js"></script>
</body>

</html>