<?php 
require_once '../_Config/conexao.php';
date_default_timezone_set('Africa/Luanda'); 

session_start();

if (!isset($_SESSION['Assept'])) :
  header('location:../login.php');
endif;

$Id=$_SESSION['Id'];
$sqli="SELECT * FROM usuarios WHERE Id='$Id'";

$result = mysqli_query($connect, $sqli);
$information= mysqli_fetch_array($result);

/*/$p = @$_GET['p'];
$pr = @$_GET['pr'];
$valo = "Utilizadores";
$valo1 = "Cargos";
$valo2 = "Acessos";
$valo3 = "perfil_user";/*/

if (isset($_GET['erro'])) :
  echo "<script>alert('Erro ao efectuar acção! por favor confira tudo e tente novamente')</script>";
endif;
if (isset($_GET['Sucesso'])) :
  echo "<script>alert('Erro ao efectuar acção! por favor confira tudo e tente novamente')</script>";
endif;

if (isset($_GET['erroUserNãoValido'])) :
  echo "<script>alert('Usuario não valido')</script>";
endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Parques</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <li class="app">
            <a href="../_logout/exit.php" class="app">
              <img style="margin-left: 50px; width:25px;  margin-top: 13px;" src="switch.png" class="img-radius" alt="User-Profile-Image">
              <span></span>
            </a>
          </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?=$information['Nome']." ".$information['Sobrenome'] ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="./pagina.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Utilizadores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="lista_utilizadores.php"><i class="icon fa fa-circle-o"></i>Utilizadores</a></li>
            <li><a class="treeview-item" href="cad_utilizadores.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i>Adicionar Utilizadores</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="fornecedores.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Fornecedores</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestão de Equipamento</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="lista_produtos.php"><i class="icon fa fa-circle-o"></i>Equipamento</a></li>
            <li><a class="treeview-item" href="cad_produtos.php"><i class="icon fa fa-circle-o"></i>Adicionar Equipamento</a></li>
            <li><a class="treeview-item" href="manutencao.php"><i class=""></i>Manutenção Equipamento</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Gerenciar Parque</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="area_parq.php"><i class="icon fa fa-circle-o"></i>Area Parque</a></li>
            <li><a class="treeview-item" href="parque.php"><i class="icon fa fa-circle-o"></i>Parques</a></li>
             <li><a class="treeview-item" href="zona_parq.php"><i class="icon fa fa-circle-o"></i>Zona Parque</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Gerenciar Reservas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="reservas.php"><i class="icon fa fa-circle-o"></i>Adicionar Reserva</a></li>
            <li><a class="treeview-item" href="lista_reservas.php"><i class="icon fa fa-circle-o"></i>Reservas</a></li>
            <li><a class="treeview-item" href="eventos.php"><i class="icon fa fa-circle-o"></i>Eventos</a></li>
          </ul>
        </li>
      </ul>
    </aside>