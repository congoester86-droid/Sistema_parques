<?php 

session_start();
session_destroy();
session_unset();

header("Location:../index.php");

echo '<script type="text/javascript">window.location = "acessando.php"</script>';

 ?>