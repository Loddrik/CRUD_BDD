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
    <br />
  </div>
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>
