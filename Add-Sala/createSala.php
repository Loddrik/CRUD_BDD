<?php
include_once '../header.php';
include_once '../conexion2.php';

?>
<h1> Informacion Sala</h1>
<br/>
<form action="createSala-response.php" method="POST">
  <div class="form">
    <div class="col">
      <input type="number" name ="id_sala" class="form-control" placeholder="ID de la sala">
    </div>

    <div class="col">
      <input type="text" name ="nombre" class="form-control" placeholder="Nombre">
    </div>

    <div class="col">
      <input type="text" name ="capacidad" class="form-control" placeholder="Capacidad">
    </div>

    <hr />


  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>