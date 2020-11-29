<?php
include_once '../header.php';
include_once '../conexion.php';

// $consulta = "select "
?>

<p> En este apartado debe seleccionar dificultad y frecuencia</p>

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