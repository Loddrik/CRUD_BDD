<?php
include_once '../header.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<p> Los id de cliente son 1, 2, 3, 4, 6, 7, 9.</p>

<form action="c5Response.php" method="get">
  <div class="form-row">
    <div class="col">
      <input type="text" name ="id" class="form-control" placeholder="Id del cliente">
    </div>
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>

<br />

<button type="submit"  class="btn btn-primary" onclick="history.back()"> Volver</button>
<?php
include_once '../footer.php';
?>