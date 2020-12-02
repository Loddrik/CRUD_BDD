<?php
include_once '../header.php';
include_once '../conexion.php';
include_once '../conexion2.php';

// $consulta = "select "
?>

<h3>A continuacion la lista de Clientes que puede eliminar.</h3>
        <?php
            $query = pg_query($dbconn3," SELECT id_cliente, nombre_persona,plan_cliente FROM cliente, persona where cliente.id_cliente = persona.id_persona ;");
            $indice = 0;
            
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Cliente</th>
                        <th scope="col">Nombre Cliente</th>
                        <th scope="col">Plan Asociado</th>
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
                                <td><?php echo $row[2]; ?></td>

                                
                            </tr>
                        <?php
                        }
                        ?> 
                </tbody>
            </table>
            <p>Recuerde que al eliminar a una persona, elimina tambien su plan de entrenamiento.</p>
            <form action="deleteCliente-response.php" method="POST">
                <div class="form">
                    <div class="col">
                        <input type="number" name ="id" class="form-control" placeholder="Id del entrenador a eliminar">
                    </div>

                    <div class="col">
                        <input type="number" name ="plan" class="form-control" placeholder="ID de plan asociado">
                    </div>

                   
                </div>
                <button type="submit"  class="btn btn-primary">Consultar</button>
            </form>
            