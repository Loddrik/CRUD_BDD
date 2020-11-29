<?php
include_once '../header.php';
include_once '../conexion2.php';

$id = $_POST['id_persona'];
$nombre = $_POST['nombre'];
$rut = $_POST['rut'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$mail = $_POST['mail'];
$edad= $_POST['edad'];

$sentencia = $base_de_datos->prepare("INSERT INTO persona(id_persona,nombre_persona, rut_persona,telefono_persona,direccion_persona,mail_persona,edad_persona) VALUES (?, ?,?,?,?,?,?);");
$resultado = $sentencia->execute([$id,$nombre,$rut,$telefono,$direccion,$mail,$edad]);
# Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if($resultado){
?>
<h1> Informacion del entrenador</h1>
<br/>
<form action="createEntrenador-response.php" method="POST">
  <div class="form">
    <div class="col">
      <input type="hidden" name ="id" class="form-control" value=<?php echo $id?>>
    </div>

    <div class="col">
      <input type="text" name ="salario" class="form-control" placeholder="Salario">
    </div>

    <div class="col">
      <input type="text" name ="especialidad" class="form-control" placeholder="Especialidad">
    </div>
  </div>
  <br />
  <button type="submit"  class="btn btn-primary">Consultar</button>
</form>

<?php
}else{
echo "<h3>Ha ocurrido un error.</h3>";


}
?>
