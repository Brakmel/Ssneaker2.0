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
    <link rel="stylesheet" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
            <li><a class="btn" href="../crud_admin_crear/index.html">Registrar Pyme</a></li>
            <li><a class="btn" href="../crud_admin_listado/listado.php">Listado Pyme</a> </li>
            <li><a class="btn" href="../crud_pyme_zapatilla/subirZapa.html">Registrar Zapatilla</a> </li>
            <li><a class="btn" href="../crud_pyme_zapatilla/index.html">Listado Zapatilla</a> </li>
            <li><a class="btn" href="../crud_cerrarsesion/cerrarsesion.php">Cerrar Session</a></li>
        </ul>
    </nav>


	<table class="table">
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