
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<tr>
            <th>Nombre producto</th>
            <th>Descripcion</th>
        </tr>
    <?php
        $conexion=mysqli_connect("localhost","root","","bdssneaker");
        session_start();
        $ses = $_SESSION['correo'];
        $pyme = $_SESSION['id'];
        if($_SESSION['id_rol']!=2){
            header("location:../crud_inicio_1/admin.php");
        }
        $consulta = "SELECT * FROM zapatilla where id_usuario='".$pyme."'";
        $resultado = mysqli_query($conexion, $consulta);   
        while($mostrar=mysqli_fetch_array($resultado)){
        ?>    
       <tr>
        <td><?php echo $mostrar ['nombre_zapatilla']?></td>
        <td><?php echo $mostrar ['descripcion']?></td>
        </tr>
        <?php } ?>
</table>
</body>
</html>