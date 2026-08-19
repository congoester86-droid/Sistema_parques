
<?php

require_once'conexao.php';

if (isset($_POST['cad_reservas'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$bi=mysqli_escape_string($connect, $_POST['bi']);
$Telefone=mysqli_escape_string($connect, $_POST['Telefone']);
$Data=mysqli_escape_string($connect, $_POST['Data']);
$DataRe=mysqli_escape_string($connect, $_POST['DataRe']);

    $sqli="INSERT INTO reservas (Id,Nome,bi,Telefone,Data,DataRe) VALUES (NULL,'$Nome','$bi','$Telefone','$Data','$DataRe')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_include_admin/reservas.php?CadastradoComSucessso");
}else{
    header("Location:../_include_admin/reservas.php?ErroNoCadastrado");
}
    
}