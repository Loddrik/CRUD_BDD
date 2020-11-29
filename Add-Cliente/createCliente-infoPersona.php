<?php
include_once '../header.php';
include_once '../conexion2.php';
?>

<h1> Informacion Personal</h1>
<br/>
<form action="createCliente-infoFinanciera.php" method="POST">
  <div class="form">
    <div class="col">
      <input type="number" name ="id_persona" class="form-control" placeholder="ID del cliente">
    </div>

    <div class="col">
      <input type="text" name ="nombre" class="form-control" placeholder="Nombre cliente">
    </div>

    <div class="col">
      <input type="text" name ="rut" class="form-control" placeholder="Rut persona">
    </div>

    <div class="col">
      <input type="text" name ="telefono" class="form-control" placeholder="Numero de telefono">
    </div>

    <div class="col">
      <input type="text" name ="direccion" class="form-control" placeholder="Direccion cliente">
    </div>

    <div class="col">
      <input type="text" name ="mail" class="form-control" placeholder="Mail cliente">
    </div>

    <div class="col">
      <input type="number" name ="edad" class="form-control" placeholder="Edad cliente">
    </div>

    <hr />

    <!-- <h1>Informacion financiera y del gimnasio</h1>

    <div class="col">
      <input type="text" name ="mensualidad" class="form-control" placeholder="Mensualidad cliente">
    </div>

    <div class="col">
      <input type="text" name ="deuda" class="form-control" placeholder="Deuda del cliente">
    </div>

    <div class="col">
      <input type="text" name ="cliente_entrenador" class="form-control" placeholder="Id del entrenador a cargo">
    </div>

    <hr/>
    
    <h1>Informacion sobre el plan de entrenamiento</h1>

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
    </div> -->
    
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
