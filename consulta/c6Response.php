<?php
include_once '../conexion.php';
include_once '../header.php';
$indice = 0;
$query = pg_query($dbconn3,"SELECT distinct persona . nombre_persona from persona , cliente , plan_ejercicio
where persona . id_persona = cliente . id_cliente and cliente . plan_cliente =
plan_ejercicio . id_plan and plan_ejercicio . repeticiones is null and
plan_ejercicio . series is null ");

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Persona</th>
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
            </tr>
        <?php
        }

      ?> 
    </tbody>
</table>

<button class="btn btn-primary" onclick="history.back()"> Volver</button>
<?php
include_once '../footer.php';
?>