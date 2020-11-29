<?php
include_once '../header.php';
include_once '../conexion2.php';
include_once '../conexion.php';



$id = $_POST['id_implemento'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$funcion = $_POST['funcion'];
$cantidad = $_POST['cantidad'];
$id_sala = $_POST['id_sala'];

$sentencia = $base_de_datos->prepare("INSERT INTO implemento(id_implemento,nombre_implemento, estado_implemento,funcion_implemento,cantidad_implemento,sala_asociada_implemento) VALUES (?,?,?,?,?,?);");
$resultado = $sentencia->execute([$id,$nombre,$estado,$funcion,$cantidad,$id_sala]);

if($resultado){
    header('Location: ../index.php');
    
    
}else{
    echo "<h1>Ha ocurrido un error</h1>";
}

?>