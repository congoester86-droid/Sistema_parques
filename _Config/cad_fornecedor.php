<?php

require_once'conexao.php';

if (isset($_POST['cadfornecedor'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Nif=mysqli_escape_string($connect, $_POST['Nif']);
$Endereco=mysqli_escape_string($connect, $_POST['Endereco']);
$Contacto=mysqli_escape_string($connect, $_POST['Contacto']);
    $sqli="INSERT INTO fornecedores (Id,Nome,Nif,Endereco,Contacto) VALUES (NULL,'$Nome','$Nif','$Endereco','$Contacto')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_include_admin/fornecedores.php?CadastradoComSucessso");
}else{
    header("Location:../_include_admin/fornecedores.php?ErroNoCadastrado");
}
    
}   
?>