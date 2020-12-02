<?php
include_once '../conexion.php';
include_once '../header.php';
$ide = $_GET["id"];
$indice = 0;
$query = pg_query_params($dbconn3,"select * from cliente where id_cliente = $1", array($ide) );

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Mensualidad</th>
      <th scope="col">Deuda</th>
      <th scope="col">Id del Entrenador asociado</th>
      <th scope="col">Id del Plan del cliente</th>
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
            <td><?php echo $row[4]; ?></td>
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