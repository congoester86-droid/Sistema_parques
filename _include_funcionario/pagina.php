<?php require_once "./menu.php"; ?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1>USUÁRIO DO SISTEMA</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Usuarios </h4>
          <p><b><?php $conta=0;
          $sql=mysqli_query($connect, "SELECT  * FROM usuarios");
          while(mysqli_fetch_array($sql)){
            $conta++;
          }echo "".$conta.""; ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
     <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Fornecedores</h4>
          <p><b><?php $conta=0;
          $sql=mysqli_query($connect, "SELECT  * FROM fornecedores");
          while(mysqli_fetch_array($sql)){
            $conta++;

          }echo "".$conta.""; ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
        <div class="info">
          <h4>Equipamentos</h4>
          <p><b><?php $conta=0;
          $sql=mysqli_query($connect, "SELECT  * FROM produto");
          while(mysqli_fetch_array($sql)){
            $conta++;

          }echo "".$conta.""; ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
        <div class="info">
          <h4>Parques</h4>
          <p><b><?php $conta=0;
          $sql=mysqli_query($connect, "SELECT  * FROM parque");
          while(mysqli_fetch_array($sql)){
            $conta++;

          }echo "".$conta.""; ?></b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h4>Reservas</h4>
          <p><b><?php $conta=0;
          $sql=mysqli_query($connect, "SELECT  * FROM eventos");
          while(mysqli_fetch_array($sql)){
            $conta++;

          }echo "".$conta.""; ?></b></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Reservas por Mês</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Funcionários por Sexo</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
        
      </div>
</main>
<?php require_once 'rodape.php'; ?>