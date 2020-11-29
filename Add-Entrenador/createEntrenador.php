<?php
include_once '../header.php';
include_once '../conexion2.php';
?>

<h1> Informacion Personal</h1>
<br/>
<form action="createEntrenador-infoEntrenador.php" method="POST">
  <div class="form">
    <div class="col">
      <input type="number" name ="id_persona" class="form-control" placeholder="ID del entrenador">
    </div>

    <div class="col">
      <input type="text" name ="nombre" class="form-control" placeholder="Nombre">
    </div>

    <div class="col">
      <input type="text" name ="rut" class="form-control" placeholder="Rut">
    </div>

    <div class="col">
      <input type="text" name ="telefono" class="form-control" placeholder="Numero de telefono">
    </div>

    <div class="col">
      <input type="text" name ="direccion" class="form-control" placeholder="Direccion">
    </div>

    <div class="col">
      <input type="text" name ="mail" class="form-control" placeholder="Mail">
    </div>

    <div class="col">
      <input type="number" name ="edad" class="form-control" placeholder="Edad">
    </div>
  </div>
  <hr />
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>
