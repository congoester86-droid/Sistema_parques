<?php require_once "menu.php"; ?>
   <main class="app-content">
      <div class="app-title">
       
       
      </div>
  
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Editar Produto</h3>
            <div class="tile-body">
                 <?php

                                if (isset($_GET['EditProduto'])) {
                                    $Dados=$_GET['EditProduto'];
                                    $SqlDados=mysqli_query($connect, "SELECT * FROM produto WHERE Id='$Dados'");
                                    $Dadosinfor=mysqli_fetch_array($SqlDados);
                                }
                                 ?>
              <form  class="row" action="../_Config/editar.php?" method="POST">
                <div class="form-group col-md-4">
                  <label class="control-label ">Nome</label>
                  <input class="form-control col-md-14"  type="text"  value="<?php echo $Dadosinfor['Nome']; ?>" name="Nome"  placeholder="Enter your name">
                   <input class="" hidden  type="text"  value="<?php echo $Dadosinfor['Id']; ?>" name="Id"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Quantidade</label>
                  <input class="form-control col-md-14" type="text" value="<?php echo $Dadosinfor['Quant']; ?>" name="Quant"  placeholder="Enter your email">
                </div>
                <hr>
                 <div class="form-group col-md-4">
                  <label class="control-label">Cod Barras</label>
                  <input class="form-control" type="text" value="<?php echo $Dadosinfor['codBarra']; ?>" name="codBarra"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Data Validade</label>
                  <input class="form-control" type="text" value="<?php echo $Dadosinfor['dataValidade']; ?>" readonly name="dataValidade"  placeholder="Enter your email">
                </div>
               
                  <div class="form-group  col-md-4">
                    <label for="exampleSelect1">Fornecedores</label>
                  <input class="form-control" type="text" value="<?php echo $Dadosinfor['Fornecedor']; ?>" name="fornecedor" readonly>
                </select>
                  </div>
                     <div class="form-group  col-md-4">
                    <label for="exampleSelect1">Estado</label>
                  <select name="Estado" class="form-control">
                    <option value="<?php echo $Dadosinfor['Estado']; ?>"><?php echo $Dadosinfor['Estado']; ?></option>
                    <option >Bom</option>
                    <option >Mau</option>
                  </select>
                  </div>
                  <div class="form-group  col-md-4">
                    <label for="exampleSelect1">Manutenção</label>
                  <select name="Manutencao" class="form-control">
                    <option >  </option>
                    <option >Em Manutenção</option>
                    <option >Reparado</option>
                  </select>
                  </div>
                  <hr>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" name="Edit_produt" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submeter</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </main>
<?php require_once 'rodape.php'; ?>