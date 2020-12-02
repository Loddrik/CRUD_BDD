<?php
include_once '../conexion.php';
include_once '../header.php';
$id = $_GET["id"];
$indice = 0;
$query = pg_query_params($dbconn3,"select distinct implemento . nombre_implemento from implemento ,
ejercicio_implemento , plan_ejercicio where plan_ejercicio . id_ejercicio =
ejercicio_implemento . id_ejercicio and ejercicio_implemento . id_implemento =
implemento . id_implemento and plan_ejercicio . id_plan = $1; ", array($id));

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Implemento requerido.</th>
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
