<?php
include "../config/Conexion.php";

$tipo = $_POST["valor"];

if ($tipo == 1) {
  $sql = "SELECT idactividadlistening AS id, titulo AS titulo_actividad, idNivel AS nivel FROM actividadlistening ORDER BY idactividadlistening DESC";
  $clase = "Listening";
} else if ($tipo == 2) {
  $sql = "SELECT idactividadReading AS id, titulo AS titulo_actividad, idNivelRea AS nivel FROM actividadreading ORDER BY idactividadReading DESC";
  $clase = "Reading";
} else if ($tipo == 3) {
  $sql = "SELECT ID AS id, Titulo AS titulo_actividad, IDnivel AS nivel FROM ejercicios";
  $clase = "Writing";
} else if ($tipo == 4) {
  $sql = "SELECT ID AS id, titulo AS titulo_actividad, IDnivel AS nivel FROM actividadesgrammar";
  $clase = "Grammar";
}

$fect = mysqli_query($conexion, $sql);

if ($fect) {
  if (mysqli_num_rows($fect) > 0) {
    $titulos_vistos = array();
    $id_total = array();

    while ($t = mysqli_fetch_assoc($fect)) {

      $titulo = $t["titulo_actividad"];
      $id = $t["id"];

      // Verifica si ya hemos visto este título antes
      if (!in_array($titulo, $titulos_vistos) and !in_array($id, $id_total)) {
        $titulos_vistos[] = $titulo;
        $id_total[] = $id;
?>
        <section class="target" data-nombre="<?php echo $titulo ?>" data-nivel="<?php echo $t["nivel"] ?>" data-clase="<?php echo $clase ?>">
          <section class="img-im">
            <img src="assets/img/illu-intermedio-large.svg" alt="">
          </section>
          <section class="container-for">
            <h2><?php echo $titulo; ?></h2>
            <p>Many people believe that English is a difficult language to learn but is it really? When you...</p>
          </section>
        </section>
<?php
      }
    }
    echo "<div id='sometrus'></div>";
  } else {
    echo "Disculpa no existe ninguna actividad para este tema, intenta después";
  }
}
?>

<script>
  $(document).ready(function() {
    $('#niveles').change(function() {
      var nivelSeleccionado = $(this).val();

      if (nivelSeleccionado == "#") {
        $('.target').show();
      } else {
        $('.target').hide();
      }


      $('.target[data-nivel="' + nivelSeleccionado + '"]').show();

      if ($('.target:visible').length === 0) {
        $('#sometrus').html("No hay resultados disponibles para este nivel.");
      } else {
        $('#sometrus').html("");
      }
    });
  });


  //Codigo para traer la activiad
  $(document).ready(function() {
    $(".target").on("click", function() {
      var nombre = $(this).data("nombre");
      var nivel = $(this).data("nivel");
      var clase = $(this).data("clase");

      if(clase == "Listening"){
         var archivo= "preguntasListening.PHP"
      }else if(clase == "Reading"){
        var archivo= "preguntasReading.php"
      }else if(clase == "Writing"){
        var archivo= "preguntasWriting.php"
      }else if(clase == "Grammar"){
        var archivo= "preguntasGrammar.php"
      }


      $.ajax({
        url: "./" + archivo,
        method: "POST",
        data: {
          nombre: nombre,
          nivel: nivel,
        },
        success: function(response) {
          document.getElementById('SOF').classList.add("der");
          $('#SOF').html(response);
        },
        error: function(xhr, status, error) {
          alert(error)
          console.error(error);
        }
      });
    });
  });

</script>