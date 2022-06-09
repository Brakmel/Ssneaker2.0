<?php
 $conexion=mysqli_connect("localhost","root","","bdssneaker");
 session_start();
  if($_SESSION['id_rol']!=1){
    header("location:../crud_inicio_1/pyme.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilo.css">
   <link rel="stylesheet" href="css/estiloform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a class="btn" href="../crud_admin_crear/index.html">Registrar Pyme</a></li>
            <li><a class="btn" href="../crud_admin_listado/listado.php">Listado Pyme</a> </li>
            <li><a class="btn" href="../crud_pyme_zapatilla/subirZapa.html">Registrar Zapatilla</a> </li>
            
            <li><a class="btn" href="../crud_pyme_zapatilla/subirZapa.html">Registrar Zapatilla</a> </li>
            <li><a class="btn" href="../crud_cerrarsesion/cerrarsesion.php">Cerrar Session</a></li>
        </ul>
    </nav>

    <form class="inputs" action="registro.php" method="POST">
        <div class="formulario">
            <input class="input" type="email" placeholder="correo" name="correo" required><br>
            <input class="input" type="password" placeholder="contraseña" name="contrasena" required><br>
            <input class="input "type="text" placeholder="nombre pyme" name="nombre_pyme" ><br>
            <input class="input "type="text" placeholder="rut" name="rut" ><br>
            <input class="input "type="text" placeholder="telefono" name="telefono"><br>
            <input class="input "type="text" placeholder="direccion" name="direccion"><br>
            <div class="caja registro">

              
                <button class="koko">Registrar</button>
            </div>
        </div>
    </form>
</div>  
</body>
</html>