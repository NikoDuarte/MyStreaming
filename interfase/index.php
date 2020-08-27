<?php

session_start();
ob_start();

$username=$_SESSION['username'];
/*if (!isset($_SESSION['username'])) {
    header("location:../php-login/login.html");
}*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio|MyStreaming</title>
    <link rel="stylesheet" href="assets/css/estilosint.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
<!--CUERPO INTERFASE-->
<body>
<!--HEADER-->
    <header>
    <div class="contenedor">
        <a href="red_social/red_social.php">
            <h2 class="logo">My Streaming Network</h2>
        </a>
        <nav>
            <a href="" class="activo">Inicio</a>
            <a href="peliculas/peli-index.phtml">Peliculas</a>
            <a href="series/series.php">Series</a>
            <a href="">Mi Lista</a>
            <a href="">Mi perfil</a>
            <a href="../php/logout.php">Cerrar sesion</a>
        </nav>
    </div>    
    </header>
<!--FIN HEADER-->
<!--MAIN-->
<main>
    <div class="pelicula-principal">
        <div class="contenedor">
            <h3 class="titulo">Mr. Robot</h3>
            <p class="descripcion">
            Sigue a un misterioso anarquista que recluta a un joven programador de computadoras (Malek) que sufre de un trastorno antisocial y se conecta a la gente pirateándolos.
            </p>
            <button role="button" class="boton">
            <i class="fas fa-play-circle"></i>
            Reproducir
            </button>
            <button role="button" class="boton">
            <i class="fas fa-info-circle"></i>
            Saber mas!
            </button>

        </div>
    </div>
    <br>
    <div class="pelicula-secundaria">
        <div class="contenedor">
            <h3 class="titulo">La Cenicienta</h3>
            <p class="descripcion">
            Cuenta las andanzas de Ella, una joven cuyo padre, un comerciante, vuelve a casarse tras enviudar. Para agradar a su padre, acoge con cariño a su madrastra y a sus hijas en la casa familiar. Pero, cuando su padre muere inesperadamente, la joven queda a merced de unas mujeres celosas y malvadas que la convierten en sirvienta y la relegan a la cocina. Pero, a pesar de la crueldad con la que la tratan, está dispuesta a cumplir las últimas palabras de su madre que le dijo que debía "ser valiente y amable".
            </p>
            <button role="button" class="boton">
            <i class="fas fa-play-circle"></i>
            Reproducir
            </button>
            <button role="button" class="boton">
            <i class="fas fa-info-circle"></i>
            Saber mas!
            </button>

        </div>
    </div>
    <br>
    <div class="pelicula-tercera">
        <div class="contenedor">
            <h3 class="titulo">Lego la pelicula</h3>
            <p class="descripcion">
            Película basada en los clásicos juguetes LEGO. Emmet, el protagonista de la película, trabaja como constructor en la ciudad Lego, pero sus conocimientos de construcción no van más allá de colocar las fichas atendiendo pormenorizadamente las instrucciones de edificación. Sin embargo, sin saber cómo ni por qué, Emmet es confundido con un 'MasterBuilder' e introducido como cabecilla de una misión que tiene por objetivo evitar que un malvado acabe con la ciudad de bloques. Por suerte, los habitantes de tan atípico lugar no están solos. Los mismísimos Superman y Batman han tomado la forma de muñecos Lego para tomar parte de esta gran aventura.            </p>
            <button role="button" class="boton">
            <i class="fas fa-play-circle"></i>
            Reproducir
            </button>
            <button role="button" class="boton">
            <i class="fas fa-info-circle"></i>
            Saber mas!
            </button>

        </div>
    </div>

</main>
<!--FIN MAIN-->

<!--PIE DE PAG-->
<footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h2 class="titulo-final">&copy; MY STREAMING 2020</h2>
            </div>
        </div>
    </footer>
<!--FIN PIE DE PAG-->

<!--SCRIPTS-->
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="assets/js/main.js"></script>

<!--FIN SCRIPTS-->
</body>
<!--FIN CUERPO-->
</html>