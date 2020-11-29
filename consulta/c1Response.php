<?php
include_once '../conexion.php';
include_once '../header.php';
$frec = $_GET["frecuencia"];
$dific = $_GET["dificultad"];
$indice = 0;
$query = pg_query_params($dbconn3,"SELECT nombre_plan FROM plan WHERE dificultad_plan > $1 and frecuencia_plan > $2", array($dific,$frec));

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Plan</th>
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

<button onclick="history.back()"> Volver</button>

<?php
include_once '../footer.php';
?>