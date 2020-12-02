<?php
//include_once '../header2.php';
include_once '../conexion2.php';
include_once '../conexion.php';
$info = $_POST;

    $id = $info[1];
    echo $id;

    for($i = 2; $i<count($info); $i++){
    
    //Aqui estaba strpos if(strpos($info[$i+1],"MIN") || strpos($info[$i+1],"HORA")){
    //in_array ha de comprobar si los valores estan dentro del array, si está pasa al siguiente

    /*if(in_array($info[$i+1],"MIN") || in_array($info[$i+1],"HORA")){
    
        $sentencia1 = $base_de_datos->prepare("INSERT INTO plan_ejercicio(id_plan,id_ejercicio,tiempo) VALUES (?,?,?);");
        $resultado1= $sentencia1->execute([$id,$info[$i],$info[$i+1]]);
        $i = $i+2;
    }
    else{

    }*/
} 



foreach($info as $i){
    echo $i . " ";
    /* if(in_array($i,"MIN") || in_array($i,"HORA")){
        echo "hola ";
     }
     else{
         echo $i. " ";
     } */
}
?>