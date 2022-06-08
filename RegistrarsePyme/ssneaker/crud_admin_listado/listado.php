<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<table border="1" >
		<tr>
			<td>id</td>
			<td>id_rol</td>
			<td>correo</td>
            <td>nombre pyme</td>
            <td>rut</td>
            <td>telefono</td>
            <td>direccion</td>
            <td>Accion</td>
		</tr>

		<?php 
		$sql="SELECT * from usuario";
        $conexion=mysqli_connect("localhost","root","","bdssneaker");
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_usuarios'] ?></td>
			<td><?php echo $mostrar['id_rol'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
            <td><?php echo $mostrar['nombre_pyme'] ?></td>
            <td><?php echo $mostrar['rut'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><a href="eliminaruser.php?id_usuarios=<?php echo $mostrar['id_usuarios']; ?>">Eliminar</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</body>
</html>