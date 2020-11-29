<?php
include_once '../header.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<p> Los id de los planes son 11, 12, 13, 14, 15, 16, 17.</p>

<form action="c7Response.php" method="get">
  <div class="form-row">
    <div class="col">
      <input type="text" name ="id" class="form-control" placeholder="Id del plan">
    </div>
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>

<br />

<button type="submit"  class="btn btn-primary" onclick="history.back()"> Volver</button>
<?php
include_once '../footer.php';
?>