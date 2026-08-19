<?php 
require_once 'conexao.php';
if (isset($_POST['submeter'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Email=mysqli_escape_string($connect, $_POST['Email']);
$Senha=mysqli_escape_string($connect, $_POST['Senha']);
$Conf_Senha=mysqli_escape_string($connect, $_POST['Conf_Senha']);


if ($Conf_Senha==$Senha) {
$sqlUser="INSERT INTO usuarios (Id_user, Nome, Email, Senha, Perfil) VALUES (NULL, '$Nome','$Email','$Senha','Admin')";
if (mysqli_query($connect, $sqlUser)) {
header("Location:../_Admin/cad_user.php?sucessFull");	
}else{header("Location:../_Admin/cad_user.php?erro");}
}else{
	header("Location:../_Admin/cad_user.php?erroDeSenha");}
}
 ?>