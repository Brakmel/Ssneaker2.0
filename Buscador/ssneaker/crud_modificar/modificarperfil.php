
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Modificar.css">
    <title>Modificar Perfil</title>
</head>
<body>
<?php
session_start();
$correo = $_SESSION['correo'];
$conexion=mysqli_connect("localhost","root","","bdssneaker");
if($_SESSION['id_rol']!=2){
    header("location:../crud_inicio_1/admin.php");
}
$user = $_SESSION['correo'];
$consulta = "SELECT * FROM usuario where correo = '".$user."'";
$resultado = mysqli_query($conexion, $consulta);   
while($mostrar=mysqli_fetch_array($resultado)){
?> 
<div class="mod">
<form class="inputs" action="modificar.php" method="POST">
Identificador:
<input type="text" class="input" value="<?php echo $mostrar ['id_usuarios']?>" disabled>
<input type="hidden" class="input" value="<?php echo $mostrar ['id_usuarios']?>" name="id_usuarios"><br>
Correo:
<input type="text" class="input" value="<?php echo $mostrar ['correo']?>" name="correo"><br>
Contraseña:
<input type="password" class="input" value="<?php echo $mostrar ['contrasena']?>" name="contrasena"><br>
Nombre de tu Pyme:
<input type="text" class="input" value="<?php echo $mostrar ['nombre_pyme']?>" name="nombre_pyme"><br>
Rut:
<input type="text" class="input" value="<?php echo $mostrar ['rut']?>" name="rut"><br>
Telefono:
<input type="text" class="input" value="<?php echo $mostrar ['telefono']?>" name="telefono"><br>
Direccion:
<input type="text" class="input" value="<?php echo $mostrar ['direccion']?>" name="direccion"><br>

<input type="submit" class="btn" value="Actualizar">
 <?php } ?>
</form>
</div>
    
</body>
</html>