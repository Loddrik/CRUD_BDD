<?php 
include_once 'conexion.php';
include_once 'header.php';

?>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Consultas predeterminadas
  </a>
  <a href="consulta/c1.php" class="list-group-item list-group-item-action">Planes de entrenamiento con cierto rango de dificultad y frecuencia de asistencia. </a>
  <a href="consulta/c2.php" class="list-group-item list-group-item-action">ID de los entrenadores que trabajan con clientes de una edad superior definida por el usuario.</a>
  <a href="consulta/c3Response.php" class="list-group-item list-group-item-action">Cantidad de clientes entrenados por cada entrenador.</a>
  <a href="consulta/c4Response.php" class="list-group-item list-group-item-action">Planes de entrenamiento ordenados por dificultad.</a>
  <a href="consulta/c5.php" class="list-group-item list-group-item-action">Informacion del cliente segun un ID.</a>
  <a href="consulta/c6Response.php" class="list-group-item list-group-item-action">Nombre de los clientes que deben realizar ejercicio cardiovasculares en su plan de entrenamiento.</a>
  <a href="consulta/c7.php" class="list-group-item list-group-item-action">Explicacion de cada uno de los ejercicios que debe realizar un cliente segun el id de su plan.<a>
  <a href="consulta/c8.php" class="list-group-item list-group-item-action">Implementos necesarios para un Id de plan en especifico.<a>
  <a href="consulta/c9Response.php" class="list-group-item list-group-item-action">Listado ejercicios que no requieren implementos.<a>
</div>


<?php
include_once 'footer.php';
?>