<?php
include 'conexion.php';


$resultado = mysqli_query($conecta, "SELECT * FROM carrito WHERE time = 1");

if (!$resultado) {
    die("La consulta SQL ha fallado: " . mysqli_error($conecta));
}

$fila = mysqli_fetch_assoc($resultado);
$c = $fila['c'];
$dr = $fila['direccion'];
$dis = $fila['distancia'];
$cl = $fila['ulColor'];
$m = $fila['modo'];
$d = $fila['d'];
if ($m==1){
    $m = "Automatico";
}
if ($m==0){
    $m = "Manual";
}
if ($dr==0){
    $dr="Avanzando";
}
if ($dr==1){
    $dr="Retrocediendo";
}
if ($dr==2){
    $dr="Derecha";
}
if ($dr==3){
    $dr="Izquierda";
}
if ($dr==4){
    $dr="Detenido";
}


if ($c==1){
    $c="Desconectado";
}
if ($c==0){
    $c="Conectado";
}

echo $c ." ".$dr ." ".$dis ." ".$cl." ".$m ." ".$d;
?>
