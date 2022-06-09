<?php
 $contrasena = $_POST['contrasena'];
 $contrasena = hash('md5', $contrasena);
 $id_rol = 2;
 $correo = $_POST['correo'];


 $conexion=mysqli_connect("localhost","root","","bdssneaker");

 $insert = "INSERT INTO usuario( contrasena, id_rol, correo) VALUES (?, ?, ?)"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'sss', $contrasena, $id_rol, $correo);
    $ok = mysqli_stmt_execute($prepare); 
    header("location: index.php");                                              
?> 
