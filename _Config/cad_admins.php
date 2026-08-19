 <?php 
require_once "conexao.php";


if (isset($_POST['cad_admins'])) {
$Nome=mysqli_escape_string($connect, $_POST['Nome']);
$Promotora=mysqli_escape_string($connect, $_POST['Promotora']);
$Nif=mysqli_escape_string($connect, $_POST['Nif']);
$Endereco=mysqli_escape_string($connect, $_POST['Endereco']);
$Telefone=mysqli_escape_string($connect, $_POST['Telefone']);
$Email=mysqli_escape_string($connect, $_POST['Email']);
$Senha=mysqli_escape_string($connect, $_POST['Senha']);
$Conf_Senha=mysqli_escape_string($connect, $_POST['Conf_Senha']);

if ($Senha=="" and $Conf_Senha=="") {
    header("Location:../_Admin/cad_admins.php?SenhaVazios");}else{
if ($Senha==$Conf_Senha) {
    $sqli="INSERT INTO usuarios (Id, Nome, Promotora, Nif, Endereco, Telefone, Email, Senha, Perfil) VALUES (null, '$Nome','$Promotora','$Nif','$Endereco','$Telefone','$Email','$Senha', 'Admi_secondary')";
if (mysqli_query($connect, $sqli)) {
    header("Location:../_Admin/cad_admins.php?CadastradoComSucessso");
}else{
    header("Location:../_Admin/cad_admins.php?ErroNoCadastrado");
}  

}else{
  header("Location:../_Admin/cad_admins.php?ErroDeSenha");
}  
}
} 

?>    

