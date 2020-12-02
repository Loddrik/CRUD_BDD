<?php
include_once '../header.php';
include_once '../conexion2.php';

// foreach ($_POST as $p){
//     echo $p . " ";
// }



foreach ($_POST as $id){
    $sentencia = $base_de_datos->prepare("DELETE FROM ejercicio where id_ejercicio = (?);");
    $resultado = $sentencia->execute([$id]);
}




if($resultado == true){
    echo "<h3>Operacion realizada con exito</h3>";
    header('Location: ../index.php');
} else{
    echo "<h3>Ha ocurrido un error</h3>";
}   
?>