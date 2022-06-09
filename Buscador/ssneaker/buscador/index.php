<?php session_start();

$conexion=mysqli_connect("localhost","root","","bdssneaker");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 <!-- importante -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <LINK REL=StyleSheet href="index.css" type="text/css">
</head>
<body>
  <!--Aqui va la IMG de nuestro buscador (principal, nuestro logo)-->
  <div class="logo_ssneaker">
    <img class="img" src="img/imagen_2022-04-18_225930174_auto_x2.png" alt="Logo">
  </div>
  <!-- nabvar -->
<nav>
  <main>
    <!--Esto es nuestro buscador-->
    <form class="d-flex">
      <div class="barra_buscador_contenedor">
        <input class="form-control me-2" id="buscar" name="buscar" onkeyup="buscar_ahora($('#buscar').val());" type="search" placeholder="buscar zapatilla deseada..." aria-label="Search">
      </div>
    </form>
    <div class="inciiar_busqueda">
      <button class="buscar" onclick="mostrar()">
        Buscar
      </button>
    </div>
    <div class="Cancelar_busqueda">
      <button class="cancelar" onclick="ocultar()">
        Cancelar busqueda
      </button>
    </div>
  </main>
</nav>
<!-- articulos -->
  <div class="album py-5 bg-light" id="probando">
    <div class="container">
      <div class="row row-cols-3 row-cols-sm-10 row-cols-md-10 g-10" id="lista">
      <div id="datos_buscador" class="container col-12 row"></div>
      
      </div>
    </div>
  </div>
<!--Estos son nuestros scripts-->
<script type="text/javascript">
        function buscar_ahora(buscar) {
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
        }
        });
        }
        buscar_ahora();
function ocultar(){
  document.getElementById('probando').style.display = 'none';
}
function mostrar(){
  document.getElementById('probando').style.display = 'block';
}
</script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html>