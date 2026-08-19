<?php require_once "menu.php"; ?>
<main class="app-content">
  <div class="app-title">
  </div>
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Cadastrar Equipamentos</h3>
      <div class="tile-body">
        <form  class="row" action="../_Config/cad_produto.php" method="POST">
          <div class="form-group col-md-4">
            <label class="control-label ">Nome</label>
            <input class="form-control col-md-14" type="text"name="Nome"  placeholder="Enter your name">
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">Quantidade</label>
            <input class="form-control col-md-14" type="text"name="Quant"  placeholder="Enter your email">
          </div>
          <hr>
          <div class="form-group col-md-4">
            <label class="control-label">Codigo De Barra</label>
            <input class="form-control" type="text"name="codBarra"  placeholder="Enter your name">
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">Data de Vencimento</label>
            <input class="form-control" type="date" name="dataValidade"  placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Fornecedores</label>
            <select name="Fornecedor" class="form-control">
              <?php $sqli=mysqli_query($connect, "SELECT * FROM fornecedores");
              while($dados=mysqli_fetch_array($sqli)){ ?>
                <option value="<?php echo $dados['Nome'];?>"><?php echo $dados['Nome'];?></option>
              <?php }?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleSelect1">Estado</label>
          <select name="Estado" class="form-control">
            <option >Bom</option>
            <option >Mau</option>
          </select>
        </div>
        <div class="form-group col-md-4 align-self-end">
          <button class="btn btn-primary" name="cad_produto" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
        </div>
      </form>
    </div>
  </div>
</div>

</div>
</main>
<?php require_once 'rodape.php'; ?>