<?php
    session_start();
    ob_start();

if (isset($_POST['inicia'])) {
    //if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1) {

        $user=$_POST['user'];
        $pass=$_POST['pass'];


        $existe = valida($user,$pass);
    
        if ($existe>0){

            $arreglo =consulta($user);
    
            if ($arreglo=1) {
?>
                <div class="cont" align="center">
                <h3 class="ok">Bienvenido <?php echo $user?> te estamos redireccionando</h3>
                <meta http-equiv="refresh" content="1.5;URL=../interfase/index.php">
                </div>
<?php
                $_SESSION['username'];
            }else{
                echo "joputa";
            }
        }else {
?>
        <div class="cont" align="center">
        <h3 class="bad">Ups, parece que el usuario que ingresaste no existe, verifica los campos!</h3>
        </div>
<?php
        }

        
//    }
}


function valida($user,$pass)
{

    include("conexion.php");  
    $con = New Conexion();
    $consulta="SELECT * FROM usuarios WHERE usuario='$user' AND password ='$pass'";
    $resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

    $numfilas = $resultado->num_rows;
        
        return $numfilas;
    
    
}


function consulta($user)
{

    $con = New Conexion();
    $consulta="SELECT * FROM usuarios WHERE usuario='$user'";

    $resultado=$con->query($consulta) or die("Error de datos".mysqli_error($con));

    $numfilas = $resultado->num_rows;
    if ($numfilas>0){
        $fila = $resultado->fetch_object();

        $_SESSION['username'] = $fila->id_user;
        $arreglo = array($fila->id_user, $fila->usuario); 
        return $arreglo;
    }
    else
    {
?>
        <h5 class="bad">Ups, parece que alguno de los datos no coinciden!</h5>
<?php
    }
}

?>
