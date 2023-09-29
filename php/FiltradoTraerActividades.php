<?php
include "../config/Conexion.php";

$tipo = $_POST["valor"];
$nivel = $_POST["clase"];


if ($tipo == 1) {
  $sql = "SELECT idactividadlistening AS id, titulo AS titulo_actividad, idNivel AS nivel, img AS img FROM actividadlistening WHERE idNivel= '$nivel' ORDER BY idactividadlistening DESC";
  $clase = "Listening";
} else if ($tipo == 2) {
  $sql = "SELECT idactividadReading AS id, titulo AS titulo_actividad, idNivelRea AS nivel, img AS img  FROM actividadreading WHERE idNivelRea= '$nivel' ORDER BY idactividadReading DESC";
  $clase = "Reading";
} else if ($tipo == 3) {
  $sql = "SELECT ID AS id, Titulo AS titulo_actividad, IDnivel AS nivel, img AS img  FROM ejercicios WHERE IDnivel= '$nivel'";
  $clase = "Writing";
} else if ($tipo == 4) {
  $sql = "SELECT ID AS id, titulo AS titulo_actividad, IDnivel AS nivel, img AS img   FROM actividadesgrammar WHERE IDnivel= '$nivel'";
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
            <img src="<?php echo $t["img"]?>" alt="">
          </section>
          <section class="container-for">
            <h2><?php echo $titulo; ?></h2>
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
  
  //Codigo para traer la activiad
  $(document).ready(function() {
    $(".target").on("click", function() {
      document.getElementById('carga').style.display ='flex';
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
          document.getElementById('carga').style.display ='none';
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


  
document.getElementById('limpiarEste').addEventListener('click', ()=>{
   document.getElementById('septionTraer').classList.remove('targetMas');
   document.getElementById('tarjetasMaster').classList.add('targetMas')
})

</script>