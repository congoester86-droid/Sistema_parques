<?php
require_once 'conexao.php';

 if (isset($_GET['DeletUtilizadores'])){
$Id=$_GET['DeletUtilizadores'];
$sqli="DELETE FROM usuarios WHERE Id='$Id' and Perfil!='Admi_primari'";
if(mysqli_query($connect, $sqli)){
	header("Location:../_include_admin/lista_utilizadores.php?sucessFull");
}else{
	header("Location:../_include_admin/lista_utilizadores.php?erro");
}
}


if (isset($_GET['DeletReser'])){
	$Id=$_GET['DeletReser'];
	$sqli="DELETE FROM reservas WHERE Id='$Id'";
	if(mysqli_query($connect, $sqli)){
		header("Location:../_include_admin/lista_reservas.php?sucessFull");
	}else{
		header("Location:../_include_admin/lista_reservas.php?erro");
	}
	}
if (isset($_GET['detetarFunv'])){
$Id=$_GET['detetarFunv'];
$sqli="DELETE FROM venda WHERE Id='$Id'";
if(mysqli_query($connect, $sqli)){
	header("Location:../_Admin/lista_funcionario.php?sucessFull");
}else{
	header("Location:../_Admin/lista_funcionario.php?erro");
}
}
if (isset($_GET['detetaVeenda'])){
$Id=$_GET['detetaVeenda'];
$sqli="DELETE FROM venda WHERE Id='$Id'";
if(mysqli_query($connect, $sqli)){
	header("Location:../_Admin/lista_venda.php?sucessFull");
}else{
	header("Location:../_Admin/lista_venda.php?erro");
}
}

if (isset($_GET['detetarPro'])){
$Id=$_GET['detetarPro'];
$sqli="DELETE FROM venda WHERE Id='$Id'";
if(mysqli_query($connect, $sqli)){
	header("Location:../_Admin/lista_produtos.php?sucessFull");
}else{
	header("Location:../_Admin/lista_produtos.php?erro");
}
}


 if (isset($_GET['detetarFuncio'])){
$Id=$_GET['detetarFuncio'];
$sqli="DELETE FROM usuarios WHERE Id='$Id'";
if(mysqli_query($connect, $sqli)){
	header("Location:../Admin_secondari/listaFuncio.php?sucessFull");
}else{
	header("Location:../Admin_secondari/listaFuncio.php?erro");
}
} 
 if (isset($_GET['DeletProduto'])){
$Id=$_GET['DeletProduto'];
$sqli="DELETE FROM produto WHERE Id='$Id'";
if(mysqli_query($connect, $sqli)){
	header("Location:../_include_admin/lista_produtos.php?sucessFull");
}else{
	header("Location:../_include_admin/lista_produtos.php?erro");
}
} 
if (isset($_GET['detetarForne'])){
$Id=$_GET['detetarForne'];
$sqli="DELETE FROM fornecedores WHERE Id='$Id'";
if(mysqli_query($connect, $sqli)){
	header("Location:../Admin_secondari/lista_fornecedores.php?sucessFull");
}else{
	header("Location:../Admin_secondari/lista_fornecedores.php?erro");
}
}

if (isset($_GET['Dele_zona'])){
$Id=$_GET['Dele_zona'];
$sqli="DELETE FROM zona_parq WHERE Id='$Id'";
	if(mysqli_query($connect, $sqli)){
		header("Location:../_include_admin/zona_parq.php?sucessFull");
	}else{
		header("Location:../_include_admin/zona_parq.php?erro");
	}
}elseif (isset($_GET["delete_area"])){
	$Id=$_GET["delete_area"];
	
	$sqli="DELETE FROM area_parq WHERE `area_parq`.`Id` = '$Id'";
	if(mysqli_query($connect, $sqli)){
		header("Location:../_include_admin/area_parq.php?sucessFull");
	}else{
		header("Location:../_include_admin/area_parq.php?erro");
	}
}elseif (isset($_GET["DeletParque"])){
	$Id=$_GET["DeletParque"];
	
	$sqli="DELETE FROM parque WHERE `parque`.`Id` = '$Id'";
	if(mysqli_query($connect, $sqli)){
		header("Location:../_include_admin/parque.php?sucessFull");
	}else{
		header("Location:../_include_admin/parque.php?erro");
	}
}