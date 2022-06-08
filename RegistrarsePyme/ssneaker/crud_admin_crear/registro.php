<?php
 $id_usuario = $_POST['id_usuarios'];
 $contrasena = $_POST['contrasena'];
 $contrasena = hash('md5', $contrasena);
 $id_rol = $_POST['id_rol'];
 $correo = $_POST['correo'];


 $conexion=mysqli_connect("localhost","root","","bdssneaker");

 $insert = "INSERT INTO usuario(id_usuarios, contrasena, id_rol, correo) VALUES (?, ?, ?, ?)"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'ssss', $id_usuario, $contrasena, $id_rol, $correo);
    $ok = mysqli_stmt_execute($prepare); 
    header("location: index.html");                                              
?> 
