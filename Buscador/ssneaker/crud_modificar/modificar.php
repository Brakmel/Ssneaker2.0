<?php
$conexion=mysqli_connect("localhost","root","","bdssneaker");
 session_start();
 $_SESSION['correo'];

 $id_usuarios=$_POST['id_usuarios'];
 $correo = $_POST['correo'];
 $nombre_pyme = $_POST['nombre_pyme'];
 $rut = $_POST['rut'];
 $telefono = $_POST['telefono'];
 $direccion = $_POST['direccion'];
 $contrasena = $_POST['contrasena'];
 $contrasena = hash('md5', $contrasena);

 $query = "UPDATE usuario SET correo=?, nombre_pyme=?, rut=?, telefono=?, direccion=?, contrasena=? WHERE id_usuarios=?"; 
 $ejecutar = mysqli_prepare($conexion, $query);   
    $pre = mysqli_stmt_bind_param($ejecutar,'ssssssi', $correo, $nombre_pyme, $rut, $telefono,$direccion,$contrasena,$id_usuarios);
    $pre = mysqli_stmt_execute($ejecutar); 
    header("location: ../crud_pyme_listado/listado.php"); 
?> 
