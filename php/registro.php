<?php

include("conexion.php");
$con = New Conexion();

if (isset($_POST['registro'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['pass']) >= 1) {

        
        $user = trim($_POST['user']);
        $correo = trim($_POST['correo']);
        $pass = trim($_POST['pass']);

        $consulta = "INSERT INTO usuarios(usuario, correo, password) VALUES ('$user','$correo','$pass')";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<a href="../logeo/login.php"> <h3 class="ok">¡Te has registrado correctamente!</h3> </a> 
           <?php
	    } else {
	    	?> 
	    	<a href="../logeo/registro.php"> <h3 class="bad">¡Ups ha ocurrido un error!</h3> </a> 
           <?php
	    }
    }else {
        ?> 
        <a href="../logeo/registro.php"> <h3 class="bad">¡Por favor complete los campos!</h3> </a> 
       <?php
    }

}

?>