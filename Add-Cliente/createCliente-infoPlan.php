<?php
include_once '../header.php';
include_once '../conexion2.php';
include_once '../conexion.php';

$id = $_POST['id'];
$mensualidad = $_POST['mensualidad'];
$deuda = $_POST['deuda'];
$cliente_entrenador = $_POST['cliente_entrenador'];
$id_plan = $_POST['id_plan'];

$sentencia1 = $base_de_datos->prepare("INSERT INTO plan(id_plan) VALUES (?);");
$resultado1= $sentencia1->execute([$id_plan]);


$sentencia2 = $base_de_datos->prepare("INSERT INTO cliente(id_cliente,mensualidad_cliente, deuda_cliente,cliente_entrenador,plan_cliente) VALUES (?, ?,?,?,?);");
$resultado2= $sentencia2->execute([$id,$mensualidad,$deuda,$cliente_entrenador,$id_plan]);

$indice = 0;
$query = pg_query($dbconn3," SELECT ejercicio.id_ejercicio, ejercicio.nombre_ejercicio, ejercicio.descripcion_ejercicio FROM ejercicio");
if($resultado1 && $resultado2 ){
  ?>
  <h1> Informacion financiera y del gimnasio</h1>

  <form action="createCliente-infoEjercicios.php" method="POST">
    <div class="form">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id del ejercicio</th>
                <th scope="col">Nombre Ejercicio</th>
                <th scope = "col">Series</th>
                <th scope = "col">Repeticiones</th>
                <th scope = "col">Tiempo (Solo ejercicios cardiovasculares)</th>
            </tr>
        </thead>
    <tbody>
      <?php
        while ($row = pg_fetch_row($query)) {
            $indice ++;
            ?>
            <tr>
                <td><input type="checkbox" name= <?php echo $row[1] ?> ></td>
                <!-- En la linea de arriba verificar si funciona sin las comillas -->
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><input type="number" name=<?php echo "series_" . $row[1]?>  />  </td>
                <td><input type="number" name=<?php echo "repeticion_" . $row[1]?>/></td>
                <td><input name = <?php echo "tiempo_" . $row[1]?>/></td>
            </tr>
        <?php
        }
        ?> 
    </tbody>
    </table>
    
    </div>

    <br />

    <button type="submit"  class="btn btn-primary">Consultar</button>
  </form>

<?php
} else{
  echo "<h2>Ha ocurrido un error...</h2>";
}
?>