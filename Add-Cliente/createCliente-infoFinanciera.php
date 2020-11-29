<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id_persona'];
$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$mail = $_POST['mail'];
$edad= $_POST['edad'];

$sentencia = $base_de_datos->prepare("INSERT INTO persona(id_persona,nombre_persona, rut_persona,telefono_persona,direccion_persona,mail_persona,edad_persona) VALUES (?, ?,?,?,?,?,?);");
$resultado = $sentencia->execute([$id,$nombre,$rut,$telefono,$direccion,$mail,$edad]);
# Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar





if($resultado){
    ?>
    <h1> Informacion financiera y del gimnasio</h1>
<br/>
<form action="createCliente-infoPlan.php" method="POST">
  <div class="form">
    

    <!--  <h1>Informacion financiera y del gimnasio</h1> -->
    <div class="col">
      <input type="hidden" name ="id" value=<?php echo $id?> class="form-control" >
    </div>

    <div class="col">
      <input type="text" name ="mensualidad" class="form-control" placeholder="Mensualidad cliente">
    </div>

    <div class="col">
      <input type="text" name ="deuda" class="form-control" placeholder="Deuda del cliente">
    </div>

    <div class="col">
      <input type="text" name ="cliente_entrenador" class="form-control" placeholder="Id del entrenador a cargo">
    </div>

    <div class="col">
      <input type="text" name ="id_plan" class="form-control" placeholder="Id del nuevo plan">
    </div>

    <hr/>
    
    <!-- <h1>Informacion sobre el plan de entrenamiento</h1>

    <div class="col">
      <input type="text" name ="id_plan" class="form-control" placeholder="Id del nuevo plan de entrenamiento">
    </div>

    <div class="col">
      <input type="text" name ="nombre_plan" class="form-control" placeholder="Nombre del plan de entrenamiento">
    </div>

    <div class="col">
      <input type="number" name ="frecuencia_plan" class="form-control" placeholder="Cantidad de dias de la semana a asistir al gimnasio">
    </div>

    <div class="col">
      <input type="number" name ="dificultad_plan" class="form-control" placeholder="Dificultad del plan (1 a 10)">
    </div> --> -->
    
    <!-- <hr/> -->

    <!-- <h1>Informacion sobre los ejercicios</h1>
        <h3>A continuacion los ejercicios disponibles para crear el plan:</h3>
    <?php
    // include_once 'ejercicios.php';
    ?> -->

    <!-- <br/> -->
  
    
    
    

    

  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>
<?php

} else{
    echo "Inputs incorrectos";
}


?>

