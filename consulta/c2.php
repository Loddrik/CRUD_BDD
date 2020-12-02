<?php
include_once '../header2.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<h3>En este apartado debe seleccionar la edad</h3>

<form action="c2Response.php" method="get">
  <div class="form-row">
    <div class="col">
      <input type="text" name ="edad" class="form-control" placeholder="Edad > x">
    </div>
  </div>
  <br>
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>

<br>

<button type="submit"  class="btn btn-primary" onclick="history.back()"> Volver</button>
<?php
include_once '../footer.php';
?>>