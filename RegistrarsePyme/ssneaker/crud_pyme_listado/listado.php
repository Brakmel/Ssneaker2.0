<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>Perfil de usuario.</header>
        <?php
 session_start();
        $ses = $_SESSION['correo'];;
        $conexion=mysqli_connect("localhost","root","","bdssneaker");
        
        $consulta = "SELECT * FROM usuario where correo = '".$ses."'";
        $resultado = mysqli_query($conexion, $consulta);   
        while($mostrar=mysqli_fetch_array($resultado)){
        ?>    
  
        <div class="perfil-box">Correo:<p><?php echo $mostrar ['correo']?></p><br></div>
        <div class="perfil-box">Contraseña:<p><?php echo $mostrar ['contrasena']?></p><br></div>

        <?php } ?>
</body>
</html>