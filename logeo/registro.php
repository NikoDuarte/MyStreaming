<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro|MyStreaming</title>
        <link rel="stylesheet" href="assets/css/estilosreg.css">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header class="header content">
            <div class="header-video">
                <video src="img/darkregistros.mp4" autoplay loop muted></video>
            </div>
            <div class="header-overlay"></div>
                <div class="header-content">

                    <h1>Registrate</h1> 
                    <div class="login-content">
                        <form method="POST">
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <h5>Usuario</h5>
                                <input type="text" class="input" name="user">
                            </div>
                        </div>
                        <div class="input-div one">
                            <div class="i">
                                <i class="fas fa-comment-alt"></i>  
                            </div>
                            <div class="div">
                                <h5>Correo</h5>
                                <input type="email" class="input" name="correo">
                            </div>
                        </div>
                        <div class="input-div pass">
                            <div class="i"> 
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Contraseña</h5>
                                <input type="password" class="input" name="pass">
                            </div>
                        </div>
                        <br>
                        <a href="login.php" class="registro">Ya tienes cuenta? INICIAR SESION</a>
                        <input type="submit" class="btn" value="Registrate" name="registro">
                        </form>
                    </div>
<?php
include("../php/registro.php");
?>

                </div>

            </div>
        </header>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>
