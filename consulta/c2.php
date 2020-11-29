<?php
include_once '../header.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<p> En este apartado debe seleccionar la edad</p>

<form action="c2Response.php" method="get">
  <div class="form-row">
    <div class="col">
      <input type="text" name ="edad" class="form-control" placeholder="Edad > x">
    </div>
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>

<br />

<button type="submit"  class="btn btn-primary" onclick="history.back()"> Volver</button>
<?php
include_once '../footer.php';
?>