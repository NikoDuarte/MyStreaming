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
    <title>Series|MyStreaming</title>
    <link rel="stylesheet" href="assets/css/estilos_seri.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
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

<?php
include("../../php/conexion.php");

$con = New Conexion();

$consulta = $con->query("SELECT DISTINCT nombre,banner_url,descripcion FROM peli_series WHERE tipo='serie'");

while ($row = mysqli_fetch_array($consulta)) {
?>
    <main>
    <div class="pelicula-principal">
        <img src="mr-robot/banner/<?php echo $row['banner_url'];?>" alt="" class="pelicula-img">
        <div class="contenedor">
            <h3 class="titulo"><?php echo $row['nombre']?></h3>
            <?php echo $row['descripcion'];?>
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
<?php
}
?>


</body>
</html>