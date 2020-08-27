
<?php   
session_start();
session_destroy();
header("location:../logeo/login.php");
exit();

?>