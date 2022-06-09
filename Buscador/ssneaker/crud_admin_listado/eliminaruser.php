<?php

  $conexion=mysqli_connect("localhost","root","","bdssneaker");

   $id_usuarios = $_REQUEST['id_usuarios'];

   $query = "DELETE FROM usuario WHERE id_usuarios='$id_usuarios'";
   $resultado = $conexion->query($query);

   if($resultado){
       header("Location: listado.php");
   }else{
       echo "Acción no realizada";
   }

?>