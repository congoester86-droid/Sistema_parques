<?php

require_once'conexao.php';

if (isset($_POST['cad_eventos'])) {
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

    $sqli="INSERT INTO eventos (Id,Nome,Descricao, Imagem) VALUES (NULL,'$Nome','$Descricao','$Imagem')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_include_admin/eventos.php?CadastradoComSucessso");
}else{
    header("Location:../_include_admin/eventos.php?ErroNoCadastrado");
}
    
}elseif (isset($_POST['edit_eventos'])) {

    $Nome=mysqli_escape_string($connect, $_POST['Nome']);
    $Descricao=mysqli_escape_string($connect, $_POST['Descricao']);
    $id = $_GET['edit'];

    print $Nome.' - '. $Descricao;
    if($Descricao == ''){
        $sqli= "UPDATE `eventos` SET `Nome` = '$Nome' WHERE `eventos`.`Id` = $id";
    }else{
        $sqli= "UPDATE `eventos` SET `Nome` = '$Nome',  `Descricao` = '$Descricao' WHERE `eventos`.`Id` = $id";
    }

    if(mysqli_query($connect, $sqli)) {
        header("Location:../_include_admin/eventos.php?status=sucesso");
    }else{
        header("Location:../_include_admin/eventos.php?status=error");
    }
}elseif (isset($_GET["evento"])) {
    $id = $_GET["evento"];

    $sqli= "DELETE FROM eventos WHERE `eventos`.`Id` = $id";

    if(mysqli_query($connect, $sqli)) {
        header("Location:../_include_admin/eventos.php?status=sucesso");
    }else{
        header("Location:../_include_admin/eventos.php?status=error");
    }
}