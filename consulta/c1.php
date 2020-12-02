<?php
include_once '../header2.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<h3> En este apartado debe seleccionar dificultad y frecuencia</h3>

<form action="c1Response.php" method="get">
  <div class="form-row">
    <div class="col">
      <input type="text" name ="dificultad" class="form-control" placeholder="Dificultad > (1-10)">
    </div>
    <div class="col">
      <input type="text" name = "frecuencia" class="form-control" placeholder="Frecuencia > (1-7)">
    </div>
  </div>
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>
<br>
<button class="btn btn-primary" onclick="history.back()"> Volver</button>

<?php

include_once '../footer.php';
?>>