<?php require_once("menu.php"); ?>

<main class="app-content">
  <div class="app-title">
  </div>
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Adicionar Reservas</h3>
      <div class="tile-body">
        <form  class="row" action="../_Config/cad_rese.php" method="POST">
          <div class="form-group col-md-4">
            <label class="control-label ">Nome</label>
            <input class="form-control col-md-14" type="text"name="Nome"  placeholder="Enter your name">
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">Bi</label>
            <input class="form-control col-md-14" type="text"name="bi"  placeholder="Enter your email">
          </div>
          <hr>
          <div class="form-group col-md-4">
            <label class="control-label">Telefone</label>
            <input class="form-control" type="text"name="Telefone"  placeholder="Enter your name">
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">Data de Reservas
            </label>
            <input class="form-control" type="date"name="Data"  placeholder="Enter your email">
            <input class="form-control" type="hidden" name="DataRe" value="<?php echo date("Y/m/d")?>"  placeholder="Enter your email">
          </div>
   
        <div class="form-group col-md-4 align-self-end">
          <button class="btn btn-primary" name="cad_reservas" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
        </div>
      </form>
    </div>
  </div>
</div>

</div>
</main>

<?php require_once("rodape.php"); ?>