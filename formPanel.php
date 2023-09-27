<?php
require_once 'config/Conexion.php';
$titulo = $_POST["titulo"];
$ta = $_POST["tabla"];
?>
<form action="formPanel.php" method="POST" data-server="<?php echo $titulo ?>" enctype="multipart/form-data">
  <input type="hidden" name="titulo" value="<?php echo $titulo ?>">
  <input type="hidden" name="ta" value="<?php echo $ta ?>">
  <label for="POR">Cargar Imagen</label>
  <input type="file" name="Archivo" id="POR" accept=".png, .jpg">

  <button name="sore">Actualizar producto</button>
</form>


<?php
if (isset($_POST["sore"])) {

  $titulo = $_POST["titulo"];
  $ta = $_POST["ta"];
  $archivo = $_FILES["Archivo"];

  $dir_subida = "uploads";
  $nombre_archivo = $archivo["name"];
  $ruta_archivo = $dir_subida . '/' . $nombre_archivo;
  move_uploaded_file($archivo["tmp_name"], $ruta_archivo);

  if ($ta == "actividadlistening") {
    $tat = "titulo";
  } else if ($ta  == "actividadreading") {
    $tat  = "titulo";
  } else if ($ta  == "ejercicios") {
    $tat  = "Titulo";
  } else if ($ta  == "actividadesgrammar") {
    $tat  = "titulo";
  }
  $act = "UPDATE $ta SET img='$ruta_archivo' WHERE $tat='$titulo'";

  if (mysqli_query($conexion, $act) > 0) {
    echo "<script>alert('Actualizado correctamente');
    window.location='Panel.php'</script>";
  } else {
    echo "<script>alert('ALGO SALIO MAL')</script>";
  }
}
?>