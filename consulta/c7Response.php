<?php
include_once '../conexion.php';
include_once '../header.php';
$id = $_GET["id"];
$indice = 0;
$query = pg_query_params($dbconn3,"SELECT ejercicio . nombre_ejercicio, ejercicio . descripcion_ejercicio from ejercicio inner join plan_ejercicio
on ejercicio . id_ejercicio = plan_ejercicio . id_ejercicio where plan_ejercicio .
id_plan = $1; ; ", array($id));

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del ejercicio.</th>
      <th scope="col">Explicacion del ejercicio.</th>

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
