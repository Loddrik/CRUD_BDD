<?php
include_once '../header.php';
include_once '../conexion2.php';
include_once '../conexion.php';

?>
    <h1> Informacion del implemento</h1>
    <br/>
    <form action="createImplemento-response.php" method="POST">
    <div class="form">

        <div class="col">
            <input type="number" name ="id_implemento" class="form-control" placeholder="Id del implemento">
        </div>

        <div class="col">
            <input type="text" name ="nombre" class="form-control" placeholder="Nombre del implemento">
        </div>

        <div class="col">
            <input type="text" name ="estado" class="form-control" placeholder="Estado del implemento">
        </div>

        <div class="col">
            <input type="text" name ="funcion" class="form-control" placeholder="Funcion del implemento">
        </div>

        <div class="col">
            <input type="number" name ="cantidad" class="form-control" placeholder="Cantidad de este implemento">
        </div>

        <h3>A continuacion la lista de salas donde puede guardar el implemento.</h3>
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


        <div class="col">
            <input type="number" name ="id_sala" class="form-control" placeholder="Sala donde se guarda este implemento">
        </div>

        <br/>
    
        <button type="submit"  class="btn btn-primary">Consultar</button>
    </form>

