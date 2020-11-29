<?php
include_once '../header.php';
include_once '../conexion2.php';
include_once '../conexion.php';
 $info=$_POST;

 if(count($info) >5){

    $info2 = array_slice($info,5);//ID DE LOS EJERCICIOS
    $id = $_POST['id_ejercicio'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $complejidad = $_POST['complejidad'];
    $sala = $_POST['sala_asociada'];


    $sentencia1 = $base_de_datos->prepare("INSERT INTO ejercicio(id_ejercicio,nombre_ejercicio,descripcion_ejercicio,complejidad_ejercicio,sala_asociada_ejercicio) VALUES (?,?,?,?,?);");
    $resultado1= $sentencia1->execute([$id,$nombre,$descripcion,$complejidad,$sala]);

    foreach($info2 as $i){

        $sentencia2 = $base_de_datos->prepare("INSERT INTO ejercicio_implemento(id_ejercicio,id_implemento) values (?,?)");
        $resultado2 = $sentencia2->execute([$id,$i]);
    }

 }
 else{
    $info2 = array_slice($info,4);//ID DE LOS EJERCICIOS
    $id = $_POST['id_ejercicio'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $complejidad = $_POST['complejidad'];
    $sala = $_POST['sala_asociada'];

    $sentencia1 = $base_de_datos->prepare("INSERT INTO ejercicio(id_ejercicio,nombre_ejercicio,descripcion_ejercicio,complejidad_ejercicio,sala_asociada_ejercicio) VALUES (?,?,?,?,?);");
    $resultado1= $sentencia1->execute([$id,$nombre,$descripcion,$complejidad,$sala]);

 }




 header('Location: ../index.php');

?>