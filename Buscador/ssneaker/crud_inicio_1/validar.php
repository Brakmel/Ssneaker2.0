<?php
 $correo = $_POST['correo'];
 $a = $_POST['contrasena'];
 $contrasena = hash('md5', $a);
 session_start();


 $conexion=mysqli_connect("localhost","root","","bdssneaker");


 $consulta="SELECT*FROM usuario where correo='$correo' and contrasena='$contrasena'";
 $resultado=mysqli_query($conexion,$consulta);
 
 $filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){ //administrador
    $_SESSION['id_rol'] = $filas['id_rol']; 
    $_SESSION['correo'] = $filas['correo'];  
    header("location:admin.php");

}else
if($filas['id_rol']==2){ //cliente
$_SESSION['id_rol'] = $filas['id_rol'];  
$_SESSION['id'] = $filas['id_usuarios'];  
$_SESSION['correo'] = $filas['correo'];   
header("location:pyme.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
