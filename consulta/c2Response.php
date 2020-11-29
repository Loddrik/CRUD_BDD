<?php
include_once '../conexion.php';
include_once '../header.php';
$edad = $_GET["edad"];
$indice = 0;
$query = pg_query_params($dbconn3," SELECT distinct cliente . cliente_entrenador from cliente , persona where cliente .
id_cliente = persona . id_persona and persona . edad_persona > $1", array($edad));

// $query = pg_query($dbconn3, "SELECT nombre_plan FROM plan WHERE dificultad_plan {'$dific'} and frecuencia_plan {'$frec'}");



?>
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id del entrenador</th>
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