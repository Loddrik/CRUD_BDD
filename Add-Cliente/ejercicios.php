<?php
    include '../conexion.php';
    $indice = 0;
    $query = pg_query($dbconn3," SELECT ejercicio.id_ejercicio, ejercicio.nombre_ejercicio, ejercicio.descripcion_ejercicio FROM ejercicio");
    ?>
    
    <form action="caca.php" method="POST">
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
                <td><input type="checkbox" name= <?php echo $row[0] ?> value = <?php echo $row[0] ?>></td>
                <!-- En la linea de arriba verificar si funciona sin las comillas -->
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><input type="number" name=<?php echo "series_" . $row[0]?>  />  </td>
                <td><input type="number" name=<?php echo "repeticion_" . $row[0]?> /> </td>
                <td><input type="text" name =<?php echo "tiempo_" . $row[0]?>/></td>
            </tr>
        <?php
        }
        ?> 
    </tbody>
    </table>
    <button type="submit">boton</button>
    </from>