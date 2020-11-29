<?php
include_once '../header.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<p> Los id de los planes son 11, 12, 13, 14, 15, 16, 17.</p>

<form action="c8Response.php" method="get">
  <div class="form-row">
    <div class="col">
      <input type="text" name ="id" class="form-control" placeholder="ID del plan">
    </div>
  </div>
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>
<br />
<button onclick="history.back()"> Volver</button>
<!-- <?php
// header('Location: /c1Response.php')
?> -->
<!-- 
<form>
    <label for="fname">First name</label>
</form>
<button type="sumbit" formaction=""></button -->
<?php
include_once '../footer.php';
?>