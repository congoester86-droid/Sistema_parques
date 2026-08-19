<?php 
require_once "conexao.php";

if (isset($_POST['Entrar'])) {
    
    $Senha= mysqli_escape_string($connect, $_POST['Senha']);
    $Email=mysqli_escape_string($connect, $_POST['Email']);

    $sqli="SELECT * FROM usuarios WHERE Email='$Email' and Senha='$Senha' ";
    $resulselect = mysqli_query($connect, $sqli);
    $inform=mysqli_fetch_array($resulselect);
    if (mysqli_num_rows($resulselect)>=1) {
        session_start();
 
        $Id=$inform['Id'];
        $_SESSION['Assept']=true;
        $_SESSION['Id']=$inform['Id'];
        
        if ($inform['Perfil']=='Admin') {
            header("Location:../_include_admin/pagina.php");  
        }else{
            
            header("Location:../_include_funcionario/pagina.php");
        }

    }else{
        header("Location:../login.php?erro");
    }

}
