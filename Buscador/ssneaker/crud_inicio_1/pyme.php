<?php
 $conexion=mysqli_connect("localhost","root","","bdssneaker");
 session_start();
  if($_SESSION['id_rol']!=2){
    header("location:../crud_inicio_1/admin.php");
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <LINK REL=StyleSheet href="css/pyme.css" type="text/css">
        <title>Ssneaker</title>
        <script src="magia.js" language="javascript"></script>
    </head>
    <body>
        <h1>¿Que deseas hacer el día de hoy?, Jefe</h1>
        <header>
            <a href="../crud_pyme_listado/listado.php">🔒Perfil🔒</a>
            <a href="../crud_pyme_listado/listado_zapatila.php">📈Zapatillas Publicadas📈</a>
            <a href="addzap.html">🎰subir Zapatilla🎰</a>
            <a href="../crud_cerrarsesion/cerrarsesion.php">🔓Cerrar Session🔓</a>
        </header>
        <main>
            <br>
            <h2>📊 ~SsneakViews~ 📰</h2>
            <br>
            <section id="noticia1">
                <a href="https://www.msn.com/es-es/estilo/shopping/7-zapatillas-veganas-y-preciosas-para-tus-looks-de-diario/ar-AAYf3RU?ocid=BingNewsSearch">♻️calzado vegano♻️</a>
                <p>
                    Seguro que no te descubrimos nada si te confesamos que somos adictas a las zapatillas. Estamos casi convencidas de no equivocarnos al decir que más del 80% de las mujeres del mundo lo son también. Así que estamos tan a gusto entre adictas. En realidad, no es culpa nuestra, el caso es que no existe un calzado más cómodo y versátil. Es casi imposible encontrar un look en el 
                    que no puedas llevar tus sneakers, que han creado su propio universo lleno de todo tipo de diseños e inspiraciones.Pero lo cierto es que desde hace algunas temporadas nosotras le estamos pidiendo algo más a las prendas que entran en nuestro armario y es que sean sostenibles en su proceso y respetuosas con el medio ambiente en su creación. Por eso nosotras ahora queremos 
                    que las zapatillas además de ideales demuestren que la sneakermanía también se ha unido al necesario interés de una moda más responsable.
                </p>
            </section>
            <div class="botones_magicos">
                <button onclick="mostrar1()">
                    👀¡Conocer View!👀
                </button>
                <button onclick="ocultar1()">
                    ¡🕳No me interesa Esta View🕳!
                </button>
            </div>
            <br>
            <h2>📊 ~SsneakViews~ 📰</h2>
            <br>
            <section id="noticia2">
                <a href="https://www.t13.cl/noticia/tendencias/padre-gran-leccion-hijo-burla-companero-zapatillas-falsificadas-08-06-2022">⛩Padre le dio gran lección a su hijo⛩</a>
                <p>
                    "Muchas veces hacemos sentir mal a los demás sin saber por lo que están pasando en su vida", reflexionó el padre, quien le dio una gran lección de humildad a su hijo.
                    Un padre se ha hecho viral en redes sociales luego de darle una gran lección de humildad a su hijo, quien se buró de un compañero del colegio porque utilizaba unas zapatillas falsificadas.
                    A través de TikTok, el padre contó la historia completa, afirmando que "mi hijo se está burlando por traer tenis piratas. Entonces lo voy a mandar toda la semana en chanclas para que aprenda,
                     para que vea que no debe hacer sentir menos a las personas con menos oportunidades".
                </p>
            </section>
            <div class="botones_magicos">
                <button onclick="mostrar2()">
                    👀¡Conocer View!👀
                </button>
                <button onclick="ocultar2()">
                    ¡🕳No me interesa Esta View🕳!
                </button>
            </div>
            <br>
            <h2>📊 ~SsneakViews~ 📰 </h2>
            <br>
            <section id="noticia3">
                <a href="https://www.msn.com/es-es/estilo/moda/estas-zapatillas-new-balance-ochenteras-tienen-m-c3-a1s-de-11000-valoraciones-en-amazon/ar-AAYcME7?ocid=BingNewsSearch">💰Más de 11.000 valoraciones en Amazon💰</a>
                <p>
                    Para darle un toque moderno y deportivo a cualquier look, nada mejor que unas zapatillas casuales. Especialmente si su diseño recuerda a los diseños vintage de moda, como son los años 80. 
                    Es por ello que, en esta ocasión, te recomendamos las zapatillas de hombre New Balance GM500, que están inspiradas en el calzado de running ochentero, pero con un acabado y una comodidad 
                    ideales para el día a día. En Amazon suman más de 11.000 valoraciones y están disponibles en una gran variedad de colores.
                </p>
            </section>
            <div class="botones_magicos">
                <button onclick="mostrar3()">
                    👀¡Conocer View!👀
                </button>
                <button onclick="ocultar3()">
                    ¡🕳No me interesa Esta View🕳!
                </button>
            </div>
            <br>
            <h2>📊 ~SsneakViews~ 📰</h2>
            <br>
            <section id="noticia4">
                <a href="https://www.revistagq.com/moda/articulo/air-jordan-5-psg-zapatillas-comprar">✨zapatillas tan bonitas que hasta los madridistas y los culés se las pondrían✨</a>
                <p>
                    Las Air Jordan 5 del PSG representan un nuevo capítulo en la relación que une al equipo parisino y a la marca que Nike creó en 1985 para cortejar a Michael Jordan. Se trata de una edición especial que se pondrá a la venta en los próximos meses, pero que ha sido filtrada en Internet a través de la cuenta de Leaked Sneakers. 
                    No es la primera vez que PSG y Jordan se juntan apara hacer unas zapatillas. En el pasado han colaborado con unas  Air Jordan 7, unas Air Jordan 6, unas Air Jordan 1 y unas Air Jordan 4, entre otras. Este año el dúo se reúne para presentar unas Air Jordan 5 del PSG. 
                </p>
            </section>
            <div class="botones_magicos">
                <button onclick="mostrar4()">
                    👀¡Conocer View!👀
                </button>
                <button onclick="ocultar4()">
                    ¡🕳No me interesa Esta View🕳!
                </button>
            </div>
            <br>
            <h2>📊 ~SsneakViews~ 📰</h2>
            <br>
            <section id="noticia5">
                <a href="https://www.msn.com/es-es/estilo/shopping/7-zapatillas-veganas-y-preciosas-para-tus-looks-de-diario/ar-AAYf3RU?ocid=BingNewsSearch">💸Por qué las zapatillas adidas NMD cuestan lo que cuestan💸</a>
                <p>
                    Las zapatillas adidas NMD no han precisado ni siquiera una década para convertirse en una de las referencias más remarcables del catálogo de la marca alemana. De hecho, este par no solo presume de este hito, sino que también es a día de hoy uno de los modelos más destacados y completos de la industria global de zapatillas orientadas al rendimiento deportivo.
                    Con una fecha de lanzamiento brevemente posterior a la de las adidas Ultraboost, que vieron la luz en febrero de 2015 para convertirse en otra de las grandes glorias de adidas en el ámbito más técnico, las NMD se convirtieron en diciembre de ese mismo año en las sneakers más punteras de la casa. Desde entonces hemos conocido algunos ejemplares aún más revolucionarios como las Adizero Pro, que se promocionaron en su debut de 2020 como “las zapatillas más rápidas y avanzadas de la historia”, pero las NMD siguen siendo beneméritas en cuanto a cómo demuestran la innovación puesta en práctica en el ámbito sneaker.
                </p>
            </section>
            <div class="botones_magicos">
                <button onclick="mostrar5()">
                    👀¡Conocer View!👀
                </button>
                <button onclick="ocultar5()">
                    ¡🕳No me interesa Esta View🕳!
                </button>
            </div>
        </main>
    </body>
    </html>