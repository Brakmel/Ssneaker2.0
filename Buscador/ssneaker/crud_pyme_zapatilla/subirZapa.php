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
    <link rel="stylesheet" href="css/estilos.css">
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
    <div class="formulario">
        <form action="subir.php" method="post" enctype="multipart/form-data">
            <div class="caja">
                     <input type="text" name="nombre_zapatilla" placeholder="nombre tilla"><br>
            </div>
            <div class="caja">
               <input type="text" name="descripcion" placeholder="descripcion"><br> 
            </div>
            <div class="caja">
            <select name="id_usuario">
            <option value="">Pyme</option>
            <?php
            $sql= "SELECT * from usuario";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                if ($mostrar['id_rol']==2){
                echo "<option value='".$mostrar['id_usuarios']."'>".$mostrar['nombre_pyme']."</option>";
            }}
            ?>
         </select><br>
            </div>
            <div class="caja">
                            <input class="img" name="foto_zapatilla" type="file" name="attachment" accept=".jpg, .png, .jpeg" value="" required><br>
            </div>
            <button >Enviar</button>
        </form>      
    </div>
  

    <a href="../buscador/index.php">Ir a la sección de listas</a><br>
</body>
</html>