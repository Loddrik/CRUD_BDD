<?php
include_once '../header.php';
include_once '../conexion.php';
include_once '../conexion2.php';

// $consulta = "select "
?>

<h3>A continuacion la lista de salas que puede eliminar.</h3>
        <?php
            $query = pg_query($dbconn3," SELECT id_sala, nombre_sala FROM sala ;");
            $indice = 0;
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Sala</th>
                        <th scope="col">Nombre Sala</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = pg_fetch_row($query)) {
                            $indice ++;
                            ?>
                            <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?> 
                </tbody>
            </table>
            <p>Recuerde que para eliminar una sala, en esta no debe realizarse 
                ningun ejercicio ni guardarse ningun implemento.</p>
            <form action="deleteSala-response.php" method="POST">
                <div class="form">

                    <div class="col">
                        <input type="number" name ="id" class="form-control" placeholder="Id de la sala a eliminar.">
                    </div>
                </div>
                <button type="submit"  class="btn btn-primary">Consultar</button>
            </form>
            
