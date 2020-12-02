<?php
include_once '../header.php';
include_once '../conexion.php';
include_once '../conexion2.php';

// $consulta = "select "
?>

<h3>A continuacion la lista de entrenadores que puede eliminar.</h3>
        <?php
            $query = pg_query($dbconn3," SELECT id_entrenador, nombre_persona FROM entrenador, persona where entrenador.id_entrenador = persona.id_persona ;");
            $indice = 0;
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id entrenador</th>
                        <th scope="col">Nombre Entrenador</th>
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
            <p>Recuerde que para eliminar un entrenador, este no debe tener ningun cliente a cargo.</p>
            <form action="deleteEntrenador-response.php" method="POST">
                <div class="form">

                    <div class="col">
                        <input type="number" name ="id" class="form-control" placeholder="Id del entrenador a eliminar">
                    </div>
                </div>
                <button type="submit"  class="btn btn-primary">Consultar</button>
            </form>
            
