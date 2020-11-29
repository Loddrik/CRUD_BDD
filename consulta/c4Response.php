<?php
include_once '../conexion.php';
include_once '../header.php';
// $edad = $_GET["edad"];
$indice = 0;
$query = pg_query($dbconn3,"select * from plan order by dificultad_plan" );

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Plan</th>
      <th scope="col">Nombre Plan</th>
      <th scope="col">Frecuencia Plan</th>
      <th scope="col">Dificultad Plan</th>
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
            <td><?php echo $row[3]; ?></td>
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