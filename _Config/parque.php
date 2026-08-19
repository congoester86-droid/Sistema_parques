<?php
require_once'conexao.php';
if (isset($_POST['cadZona'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Descricao=mysqli_escape_string($connect, $_POST['Descricao']);

    $sqli="INSERT INTO zona_parq (Id,Nome,Descricao) VALUES (NULL,'$Nome','$Descricao')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_include_admin/zona_parq.php?CadastradoComSucessso");
}else{
    header("Location:../_include_admin/zona_parq.php?ErroNoCadastrado");
}   
}

if (isset($_POST['cad_parq'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Descricao=mysqli_escape_string($connect, $_POST['Descricao']);


    $arquivoImg=isset($_FILES['Imagem'])?$_FILES['Imagem']:"";
    $nomeImg=$arquivoImg['name'];
    $tamanhoImg=$arquivoImg['size'];
    $extensaoImg=explode('.', $nomeImg);
    $extensaoImg=end($extensaoImg); 
    $novoNomeImgBDin="ImgUtiliza" . md5(time());
    $moverImg=move_uploaded_file($_FILES['Imagem']['tmp_name'], '../_imgParq/' . $novoNomeImgBDin . '.' . $extensaoImg);
    $Imagem=$novoNomeImgBDin . '.' . $extensaoImg;

    $sqli="INSERT INTO parque (Id,Nome,Descricao, Imagem) VALUES (NULL,'$Nome','$Descricao','$Imagem')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_include_admin/parque.php?CadastradoComSucessso");
}else{
    header("Location:../_include_admin/parque.php?ErroNoCadastrado");
}
    
}else if (isset($_POST['cad_'])) {
    $Nome=mysqli_escape_string($connect, $_POST['Nome']);
    $Descricao=mysqli_escape_string($connect, $_POST['Descricao']);
    $nome_parq=mysqli_escape_string($connect, $_POST['nome_parq']);
    $zona_parq=mysqli_escape_string($connect, $_POST['zona_parq']);

    $arquivoImg=isset($_FILES['Imagem'])?$_FILES['Imagem']:"";
    $nomeImg=$arquivoImg['name'];
    $tamanhoImg=$arquivoImg['size'];
    $extensaoImg=explode('.', $nomeImg);
    $extensaoImg=end($extensaoImg); 
    $novoNomeImgBDin="ImgUtiliza" . md5(time());
    $moverImg=move_uploaded_file($_FILES['Imagem']['tmp_name'], '../_imgParq/' . $novoNomeImgBDin . '.' . $extensaoImg);
    $Imagem=$novoNomeImgBDin . '.' . $extensaoImg;

    $sqli="INSERT INTO area_parq (Id,Nome,Descricao,nome_parq, zona_parq, Imagem) VALUES (NULL,'$Nome','$Descricao','$nome_parq','$zona_parq','$Imagem')";
    if (mysqli_query($connect, $sqli)) {
        header("Location:../_include_admin/area_parq.php?CadastradoComSucessso");
    }else{
        header("Location:../_include_admin/area_parq.php?ErroNoCadastrado");
    }
    
}else if(isset($_POST['cadPaque'])){
    
    $Nome=mysqli_escape_string($connect, $_POST['Nome']);
    $Descricao=mysqli_escape_string($connect, $_POST['Descricao']);

    $arquivoImg=isset($_FILES['Imagem'])?$_FILES['Imagem']:"";
    $nomeImg=$arquivoImg['name'];
    $tamanhoImg=$arquivoImg['size'];
    $extensaoImg=explode('.', $nomeImg);
    $extensaoImg=end($extensaoImg); 
    $novoNomeImgBDin="ImgUtiliza" . md5(time());
    $moverImg=move_uploaded_file($_FILES['Imagem']['tmp_name'], '../_imgParq/' . $novoNomeImgBDin . '.' . $extensaoImg);
    $Imagem=$novoNomeImgBDin . '.' . $extensaoImg;

    $sqli="INSERT INTO parque (Id,Nome, Descricao, Imagem) VALUES (NULL,'$Nome','$Descricao','$Imagem')";
    if (mysqli_query($connect, $sqli)) {
        header("Location:../_include_admin/parque.php?CadastradoComSucessso");
    }else{
        header("Location:../_include_admin/parque.php?ErroNoCadastrado");
    }

}