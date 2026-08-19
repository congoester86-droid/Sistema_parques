<?php

require_once'conexao.php';

if (isset($_POST['cad_produto'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Quant=mysqli_escape_string($connect, $_POST['Quant']);
$codBarra=mysqli_escape_string($connect, $_POST['codBarra']);
$dataValidade=mysqli_escape_string($connect, $_POST['dataValidade']);
$Fornecedor=mysqli_escape_string($connect, $_POST['Fornecedor']);
$Estado=mysqli_escape_string($connect, $_POST['Estado']);

    $sqli="INSERT INTO produto (Id,Nome,Quant,codBarra,dataValidade,Fornecedor,Estado) VALUES (NULL,'$Nome','$Quant','$codBarra','$dataValidade','$Fornecedor','$Estado')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_include_admin/lista_produtos.php?CadastradoComSucessso");
}else{
    header("Location:../_include_admin/lista_produtos.php?ErroNoCadastrado");
}
    
} 


if (isset($_POST['cadvenda'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Quantidade=mysqli_escape_string($connect, $_POST['Quantidade']);
$Id_promotora=mysqli_escape_string($connect, $_POST['Id_promotora']);
$nome_entidade=mysqli_escape_string($connect, $_POST['nome_entidade']);
$NomeCliente=mysqli_escape_string($connect, $_POST['NomeCliente']);
$Data_venda=mysqli_escape_string($connect, $_POST['Data_venda']);

    $sqli="INSERT INTO venda (Id,Nome,Quantidade,Id_promotora,NomeCliente,nome_entidade,Data_venda) VALUES (NULL,'$Nome','$Quantidade','$Id_promotora','$NomeCliente','$nome_entidade','$Data_venda')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../Funcionario/lista_venda.php?CadastradoComSucessso");
}else{
    header("Location:../Funcionario/lista_venda.php?ErroNoCadastrado");
}
    
}  
?>