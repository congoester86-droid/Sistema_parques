<?php 
require_once'conexao.php';


if (isset($_POST['Edit_funcionario'])) {
	$Nome=mysqli_escape_string($connect, $_POST['Nome']);
	$Sobrenome=mysqli_escape_string($connect, $_POST['Sobrenome']);
	$Nif=mysqli_escape_string($connect, $_POST['Nif']);
	$Endereco=mysqli_escape_string($connect, $_POST['Endereco']);
	$Telefone=mysqli_escape_string($connect, $_POST['Telefone']);
	$Email=mysqli_escape_string($connect, $_POST['Email']);
	$Id=mysqli_escape_string($connect, $_POST['Id']);

	$sql="UPDATE usuarios SET Nome='$Nome', Sobrenome='$Sobrenome', Nif='$Nif', Endereco='$Endereco', Telefone='$Telefone',Email='$Email' WHERE Id='$Id' ";

	if(mysqli_query($connect, $sql)){
		header("Location:../_include_admin/lista_utilizadores.php?sucesso");
	}else{
		header("Location:../_include_admin/lista_utilizadores.php?Erro");
	}
}
if (isset($_POST['Edit_fornecedor'])) {
	$Nome=mysqli_escape_string($connect, $_POST['Nome']);
	$Nif=mysqli_escape_string($connect, $_POST['Nif']);
	$Endereco=mysqli_escape_string($connect, $_POST['Endereco']);
	$Contacto=mysqli_escape_string($connect, $_POST['Contacto']);
	$Id=mysqli_escape_string($connect, $_POST['Id']);

	$sql="UPDATE fornecedores SET Nome='$Nome', Nif='$Nif', Endereco='$Endereco', Contacto='$Contacto' WHERE Id='$Id' ";

	if(mysqli_query($connect, $sql)){
		header("Location:../_include_admin/fornecedores.php?sucesso");
	}else{
		header("Location:../_include_admin/fornecedores.php?Erro");
	}
}
if (isset($_POST['Edit_produt'])) {
	$Nome=mysqli_escape_string($connect, $_POST['Nome']);
	$Quant=mysqli_escape_string($connect, $_POST['Quant']);
	$codBarra=mysqli_escape_string($connect, $_POST['codBarra']);
	$Id=mysqli_escape_string($connect, $_POST['Id']);
	$Estado=mysqli_escape_string($connect, $_POST['Estado']);
	$Manutencao=mysqli_escape_string($connect, $_POST['Manutencao']);

	$sql="UPDATE produto  SET Nome='$Nome', Quant='$Quant', codBarra='$codBarra', Estado='$Estado',
	Manutencao='$Manutencao' WHERE Id='$Id' ";

	if(mysqli_query($connect, $sql)){
		header("Location:../_include_admin/lista_produtos.php?sucesso");
	}else{
		header("Location:../_include_admin/lista_produtos.php?Erro");
	}
}


if (isset($_GET['Reparado'])) {
	$Id=$_GET['Reparado'];

	$sql=mysqli_query($connect , "SELECT  * FROM produto WHERE Id='$Id'");
	$dados=mysqli_fetch_array($sql);
	$ESt=$dados['Estado']='Bom';
	$Et=$dados['Manutencao']='Reparado';
	
	$sql="UPDATE produto  SET Estado='$ESt',
	Manutencao='$Et'  WHERE Id='$Id' ";

	if(mysqli_query($connect, $sql)){
		header("Location:../_include_admin/manutencao.php?sucesso");
	}else{
		header("Location:../_include_admin/manutencao.php?Erro");
	}
}
if (isset($_GET['validar'])) {
	$valor=$_GET['validar'];
	$SQL=mysqli_query($connect, "SELECT * FROM utilizadores WHERE Id_utiliz='$valor'");
	$dados=mysqli_fetch_array($SQL);
	$Nome=$dados['Nome'];
	$Email=$dados['Email'];
	$Senha=$dados['Senha'];
	$Id=$dados['Id_utiliz'];
	$stato=$dados['Statos'];

	$sql=mysqli_query($connect, "UPDATE utilizadores SET Statos='VALIDO' WHERE Id_utiliz='$valor'");
	
	$dadosSl= "SELECT * FROM users WHERE Id_uti='$valor'";
	$VerifUser=mysqli_query($connect, $dadosSl);

	if (mysqli_num_rows($VerifUser)>=1) {

		$sqlVar="UPDATE users SET Statos='VALIDO' WHERE Id_uti='$valor'";
		if(mysqli_query($connect, $sqlVar)):
			header("Location:../_data_center/utilizadores.php?sucesso");
		endif;
	}else{
		
		$inser="INSERT INTO users (Id_user, Senha , Email, Nome, Id_uti, Statos) VALUES (NULL,'$Senha','$Email','$Nome', '$Id', '$stato')";
		if(mysqli_query($connect, $inser)){

			header("Location:../_data_center/utilizadores.php?sucesso");
		}else{
			header("Location:../_data_center/utilizadores.php?Erro");
		}
	}
}


if (isset($_GET['Nvalidar'])) {
	$valor=$_GET['Nvalidar'];

	$sqli=mysqli_query($connect, "UPDATE users SET Statos='NÃO VALIDO' WHERE Id_user='$valor'");
	$sql="UPDATE utilizadores SET Statos='NÃO VALIDO' WHERE Id_utiliz='$valor'";
	if(mysqli_query($connect, $sql)){
		header("Location:../_data_center/utilizadores.php?sucesso");
	}else{
		header("Location:../_data_center/utilizadores.php?Erro");
	}
}



?>