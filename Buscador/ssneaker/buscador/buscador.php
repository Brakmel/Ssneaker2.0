<?php 
$conexion=mysqli_connect("localhost","root","","bdssneaker");




$buscardor=mysqli_query($conexion,"SELECT * FROM zapatilla WHERE nombre_zapatilla LIKE LOWER('%".$_POST["buscar"]."%')"); 
 while($resultado = mysqli_fetch_assoc($buscardor)){ 
?>

<div class="col-4">
<div class="card shadow-sm">
<img height="320  px" src="data:image/jpg;base64,<?php echo base64_encode($resultado['foto_zapatilla']); ?>"/>
<!--<img src="img/<?php echo $resultado["foto_zapatilla"]; ?>.jpg" alt="">-->
  <div class="card-body">
    <p class="card-text"><?php echo $resultado["nombre_zapatilla"]; ?></p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      </form>

      </div>
      <small class="text-muted"><?php echo $resultado["descripcion"]; ?></small>
    </div>
  </div>
</div>
</div>


<?php } ?>
