<?php
include_once '../conexion.php';
include_once '../header.php';
// $edad = $_GET["edad"];
$indice = 0;
$query = pg_query($dbconn3," SELECT persona . id_persona , persona . nombre_persona , count (*) from cliente ,
persona where cliente . cliente_entrenador = persona . id_persona group by persona .
id_persona , persona . nombre_persona , cliente . cliente_entrenador" );

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id entrenador</th>
      <th scope="col">Nombre entrenador</th>
      <th scope="col">Cantidad de clientes que entrena</th>
    </tr>
    </thead>
    <tbody>
      <?php
        while ($row = pg_fetch_row($query)) {
            $indice ++;
            ?>
            <tr>
            <th scope="row"> <?php echo $indice;?> </th>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            </tr>
        <?php
        }

      ?> 
    </tbody>
</table>

<button onclick="history.back()"> Volver</button>
<?php
include_once '../footer.php';
?>