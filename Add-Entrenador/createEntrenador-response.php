<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id'];
$salario = $_POST['salario'];
$especialidad = $_POST['especialidad'];


$sentencia = $base_de_datos->prepare("INSERT INTO entrenador(id_entrenador,salario_entrenador, especialidad_entrenador) VALUES (?,?,?);");
$resultado = $sentencia->execute([$id,$salario,$especialidad]);

if($resultado){
    echo "<h3>Operacion realizada con exito</h3>";
    header('Location: ../index.php');
} else{
    echo "<h3>Ha ocurrido un error</h3>";
}
?>