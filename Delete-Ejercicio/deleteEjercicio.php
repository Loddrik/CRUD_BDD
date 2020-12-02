<?php
include_once '../header.php';
include_once '../conexion.php';
include_once '../conexion2.php';

// $consulta = "select "
?>

<h3>A continuacion la lista de ejercicios que puede eliminar.</h3>
<form action="deleteEjercicio-response.php" method="POST">
    <div class="form">
        <?php
            $query = pg_query($dbconn3," SELECT id_ejercicio, nombre_ejercicio FROM ejercicio ;");
            $indice = 0;
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id ejercicio</th>
                        <th scope="col">Nombre ejercicio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = pg_fetch_row($query)) {
                            $indice ++;
                            ?>
                            <tr>
                                <td><input type="checkbox" name=<?php echo $row[0]?> value=<?php echo $row[0]?>></td>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?> 
                </tbody>
            </table>
    </div>
    <button type="submit"  class="btn btn-primary">Consultar</button>    
</form>           
            

            