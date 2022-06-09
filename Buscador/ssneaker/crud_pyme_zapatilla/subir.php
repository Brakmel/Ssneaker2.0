<?php session_start();

$conexion=mysqli_connect("localhost","root","","bdssneaker");


$nombre_zapatilla = $_POST['nombre_zapatilla'];
$descripcion = $_POST['descripcion'];
$id_usuario = $_POST['id_usuario'];
$foto_zapatilla = addslashes(file_get_contents($_FILES['foto_zapatilla']['tmp_name']));

$query = "INSERT INTO zapatilla(nombre_zapatilla, descripcion, id_usuario,foto_zapatilla) VALUES ('$nombre_zapatilla','$descripcion','$id_usuario','$foto_zapatilla')"; 
$resultado = $conexion->query($query);

if($resultado){
    header("Location: index.php");
}else{
    echo "No se pudo insertar";
}

?>
