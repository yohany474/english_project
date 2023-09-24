<?php
include "../config/Conexion.php";

$tipo = $_POST["valor"];

if ($tipo == 1) {
  $sql = "SELECT idactividadlistening AS id, titulo AS titulo_actividad, idNivel AS nivel FROM actividadlistening ORDER BY idactividadlistening ASC";
} else if ($tipo == 2) {
  $sql = "SELECT idactividadReading AS id, titulo AS titulo_actividad, idNivelRea AS nivel FROM actividadreading ORDER BY idactividadReading DESC";
} else if ($tipo == 3) {
  $sql = "SELECT idWriting AS id, Titulo AS titulo_actividad, IdNivel AS nivel FROM actividadeswriting ORDER BY idWriting DESC";
} else if ($tipo == 4) {
  $sql = "SELECT ID AS id, Título AS titulo_actividad, IDnivel AS nivel FROM ejercicios";
} else if ($tipo == 5) {
  $sql = "SELECT idVocabu AS id, Titulo AS titulo_actividad, idNivel AS nivel FROM actividadesvocabulary";
}

$fect = mysqli_query($conexion, $sql);

if ($fect) {
  if (mysqli_num_rows($fect) > 0) {
    $titulos_vistos = array();
    $id_total= array();

    while ($t = mysqli_fetch_assoc($fect)) {

      $titulo = $t["titulo_actividad"];
      $id = $t["id"];
    
    // Verifica si ya hemos visto este título antes
    if (!in_array($titulo, $titulos_vistos) and !in_array($id, $id_total) ) {
        $titulos_vistos[] = $titulo;
        $id_total[] = $id;
?>
      <section class="target" data-id="<?php echo $t["id"]?>" data-nivel="<?php echo $t["nivel"]?>">
        <section class="img-im">
          <img src="assets/img/illu-intermedio-large.svg" alt="">
        </section>
        <section class="container">
          <h2><?php echo $titulo; ?></h2>
          <p>Many people believe that English is a difficult language to learn but is it really? When you...</p>
        </section>
      </section>
<?php
    }
  }
  } else {
    echo "Disculpa no existe ninguna actividad para este tema, intenta después";
  }
}
?>

<script>
  $(document).ready(function() {
   $('#niveles').change(function() {
     var nivelSeleccionado = $(this).val();
     
     console.log(nivelSeleccionado)
     $('.target').attr('data-nivel', nivelSeleccionado);
     
   });
 });
</script>