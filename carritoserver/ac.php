<?php
include 'conexion.php';

if (isset($_POST['D'])) {
  $sql = "UPDATE carrito SET c= 1 WHERE time= 1";
$resultado = mysqli_query($conecta, $sql);
if (!$resultado) {
  die("Error al actualizar la base de datos: " . mysqli_error($conecta));
}

}
?>
