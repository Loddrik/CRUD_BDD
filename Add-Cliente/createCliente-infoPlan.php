<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id'];
$mensualidad = $_POST['mensualidad'];
$deuda = $_POST['deuda'];
$cliente_entrenador = $_POST['cliente_entrenador'];
$id_plan = $_POST['id_plan'];

$sentencia1 = $base_de_datos->prepare("INSERT INTO plan(id_plan) VALUES (?);");
$resultado1= $sentencia1->execute([$id_plan]);


$sentencia2 = $base_de_datos->prepare("INSERT INTO cliente(id_cliente,mensualidad_cliente, deuda_cliente,cliente_entrenador,plan_cliente) VALUES (?, ?,?,?,?);");
$resultado2= $sentencia2->execute([$id,$mensualidad,$deuda,$cliente_entrenador,$id_plan]);


if($resultado1 && $resultado2 ){
  ?>
  <h1> Informacion financiera y del gimnasio</h1>

  <form action="createCliente-infoEjercicios.php" method="POST">
  <div class="form">

    <?php 
    include_once 'ejercicios.php';
    ?>
  </div>

  <br />

  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>

<?php
} else{
  echo "<h2>Ha ocurrido un error...</h2>";
}
?>