<?php
include "../config/Conexion.php";

$tipo = $_POST["valor"];
$tabla= $_POST["tabla"];

if ($tipo == 1) {
  $sql = "SELECT idactividadlistening AS id, titulo AS titulo_actividad, idNivel AS nivel FROM actividadlistening ORDER BY titulo DESC";
  $clase = "Listening";
} else if ($tipo == 2) {
  $sql = "SELECT idactividadReading AS id, titulo AS titulo_actividad, idNivelRea AS nivel FROM actividadreading ORDER BY titulo DESC";
  $clase = "Reading";
} else if ($tipo == 3) {
  $sql = "SELECT ID AS id, Titulo AS titulo_actividad, IDnivel AS nivel FROM ejercicios ORDER BY Titulo DESC";
  $clase = "Writing";
} else if ($tipo == 4) {
  $sql = "SELECT ID AS id, titulo AS titulo_actividad, IDnivel AS nivel FROM actividadesgrammar ORDER BY titulo DESC";
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
        <section class="ret" data-titulo="<?php echo $titulo?>" data-tabla="<?php echo $tabla?>">
          <p><?php echo $titulo; ?></p>
          <button class="re">Cargar archivo</button>
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
  //Codigo para traer la activiad
  $(document).ready(function() {
    $(".ret").on("click", function() {
      var titulo = $(this).data("titulo");
      var tabla = $(this).data("tabla");

      $.ajax({
        url: "formPanel.php",
        method: "POST",
        data: {
          titulo: titulo,
          tabla: tabla
        },
        success: function(response) {
          document.getElementById('WAER').classList.add("ass");
          $('#WAER').html(response);
        },
        error: function(xhr, status, error) {
          alert(error)
          console.error(error);
        }
      });
    });
  });
</script>