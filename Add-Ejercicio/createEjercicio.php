<?php
include_once '../header.php';
include_once '../conexion2.php';

?>
<h1> Informacion Ejercicio</h1>
<br/>
<form action="createEjercicio-response.php" method="POST">

    <div class="form">
        <div class="col">
            <input type="number" name ="id_ejercicio" class="form-control" placeholder="ID del ejercicio">
        </div>

        <div class="col">
            <input type="text" name ="nombre" class="form-control" placeholder="Nombre">
        </div>

        <div class="col">
            <input type="text" name ="descripcion" class="form-control" placeholder="Pequena descripcion del ejercicio">
        </div>

        <div class="col">
            <input type="text" name ="complejidad" class="form-control" placeholder="Complejidad ejercicio">
        </div>

        
        <h3>¿Su ejercicio necesita de algun implemento?</h3>

    </div>
    

    

    <hr />

  
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>