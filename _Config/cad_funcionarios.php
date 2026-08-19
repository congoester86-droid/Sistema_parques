<?php

require_once'conexao.php';

if (isset($_POST['cad_funcionario'])) {
    $Nome=mysqli_escape_string($connect, $_POST['Nome']);
    $Sobrenome=mysqli_escape_string($connect, $_POST['Sobrenome']);
    $Nif=mysqli_escape_string($connect, $_POST['Nif']);
    $Endereco=mysqli_escape_string($connect, $_POST['Endereco']);
    $Telefone=mysqli_escape_string($connect, $_POST['Telefone']);
    $Email=mysqli_escape_string($connect, $_POST['Email']);
    $Sexo = mysqli_escape_string($connect, $_POST['Sexo']);
    $Senha=mysqli_escape_string($connect, $_POST['Senha']);

    $sqli="INSERT INTO usuarios (Id, Nome, Sobrenome, Nif , Endereco, Telefone,  Email, Senha,Perfil) VALUES (null, '$Nome','$Sobrenome','$Nif','$Endereco','$Telefone','$Email',$Senha,'Funcionario')";

    $funcio = "INSERT INTO `funcionarios` (`Id`, `Nome`, `Sobrenome`, `Bi`, `Endereco`, `Telefone`, `Email`, `sexo`) VALUES (NULL, '$Nome', '$Sobrenome', '$Nif', '$Endereco', '$Telefone', '$Email', '$Sexo')";

    if (mysqli_query($connect, $sqli)) {
        mysqli_query($connect,$funcio);
        header("Location:../_include_admin/lista_utilizadores.php?CadastradoComSucessso");
    }else{
        header("Location:../_include_admin/lista_utilizadores.php?ErroNoCadastrado");
    }
    
}    
