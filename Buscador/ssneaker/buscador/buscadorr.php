<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MayEm</title>
    <link rel="icon" href="Imágenes/Icon.png">
</head>
<body>
<main>
<div class="tabla_rkn">
<a href="Listadoproductos.php">Deshacer filtro</a>
<table border="1">
<tr>
            <th>Nombre producto</th>
            <th>Descripcion</th>
        </tr>
    <?php
        $conexion=mysqli_connect("localhost","root","","bdssneaker");
        $consulta = "SELECT * FROM zapatilla where id_usuario ";

        $resultado = mysqli_query($conexion, $consulta);   
        while($mostrar=mysqli_fetch_array($resultado)){
        ?>    
       <tr>
        <?php $sql2="SELECT * from zapatilla WHERE id= $mostrar[id]";
        $result2=mysqli_query($conexion,$sql2);
        while($mostrar2=mysqli_fetch_array($result2)){ ?>
            <td><?php echo $mostrar2 ['nombre_zapatilla']?></td>
        <?php }?>
        <td><?php echo $mostrar ['descripcion']?></td>
        </tr>
        <?php } ?>
</table>
</div>
</main>
</body>
</html>