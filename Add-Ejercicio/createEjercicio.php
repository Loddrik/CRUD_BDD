<?php
include_once '../header.php';
include_once '../conexion2.php';
include_once '../conexion.php';
$query = pg_query($dbconn3," SELECT nombre_implemento,id_implemento FROM implemento;");
$query2 = pg_query($dbconn3," SELECT id_sala, nombre_sala FROM sala;");

?>

<h1> Informacion Ejercicio</h1>
<br/>
<form action="createEjercicio-response.php" method="POST" >

    <div class="form">
        <div class="col">
            <input type="number" name ="id_ejercicio" class="form-control" placeholder="ID del ejercicio">
        </div>

        <div class="col">
            <input type="text" name ="nombre" class="form-control" placeholder="Nombre">
        </div>

        <div class="col">
            <input type="text" name ="descripcion" class="form-control" placeholder="Pequena descripcion del ejercicio">
        </div>

        <div class="col">
            <input type="text" name ="complejidad" class="form-control" placeholder="Complejidad ejercicio">
        </div>


        <br/>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id sala</th>
                    <th scope="col">Nombre sala</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $indice2 =0;
                while ($row = pg_fetch_row($query2)) {
                    $indice2 ++;
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

        <br/>

        <p>Recuerde que si el ejercicio es cardiovascular, debe ingresar el id de sala cardiovascular.</p>

        <div class="col">
            <input type="text" name ="sala_asociada" class="form-control" placeholder="Sala asociada">
        </div>
        <br/>

        <h3>¿Su ejercicio necesita de algun implemento?</h3>
        <p>Por favor, marque los implementos necesarios, si no los necesita, omita esta parte y presione "Consultar".</p>

          <?php
            $indice = 0;
            while ($row = pg_fetch_row($query)) {

                $indice ++;
                // echo $row[1];
                ?>
                <input type="checkbox"  name=<?php echo "ejercicio_".$indice?> value=<?php echo $row[1]?>>
                <?php echo $row[0]; ?><br/>
                <?php
            }
                ?> 
    </div>
    <hr />

  
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>