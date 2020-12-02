<?php
include_once '../conexion.php';
include_once '../header.php';
$indice = 0;
$query = pg_query($dbconn3,"select ej . nombre_ejercicio from ejercicio ej except select ej . nombre_ejercicio
from ejercicio ej , ejercicio_implemento ejim where ej . id_ejercicio = ejim .
id_ejercicio ");

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del ejercicio.</th>

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