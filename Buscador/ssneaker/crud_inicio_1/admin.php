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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloadmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
    <nav>
        <ul>
            <li><a class="btn" href="../crud_admin_crear/index.php">Registrar Pyme</a></li>
            <li><a class="btn" href="../crud_admin_listado/listado.php">Listado Pyme</a> </li>
            <li><a class="btn" href="../crud_pyme_zapatilla/subirZapa.php">Registrar Zapatilla</a> </li>
            <li><a class="btn" href="../crud_pyme_zapatilla/index.php">Listado Zapatilla</a> </li>
            <li><a class="btn" href="../crud_cerrarsesion/cerrarsesion.php">Cerrar Session</a></li>
        </ul>
    </nav>

    

</body>
</html>