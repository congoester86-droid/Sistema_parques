<?php require_once "menu.php"; ?>
   <main class="app-content">
      <div class="app-title">
       
       
      </div>
  
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Editar Funcionarios</h3>
            <div class="tile-body">
                 <?php

                                if (isset($_GET['edit_fornecedor'])) {
                                    $Dados=$_GET['edit_fornecedor'];
                                    $SqlDados=mysqli_query($connect, "SELECT * FROM fornecedores WHERE Id='$Dados'");
                                    $Dadosinfor=mysqli_fetch_array($SqlDados);
                                }
                                 ?>
              <form  class="row" action="../_Config/editar.php" method="POST">
                <div class="form-group col-md-4">
                  <label class="control-label ">Nome</label>
                  <input class="form-control col-md-14"  type="text"  value="<?php echo $Dadosinfor['Nome']; ?>" name="Nome"  placeholder="Enter your name">
                   <input class="" hidden  type="text"  value="<?php echo $Dadosinfor['Id']; ?>" name="Id"  placeholder="Enter your name">
                </div>
                <hr>
                 <div class="form-group col-md-4">
                  <label class="control-label">BI</label>
                  <input class="form-control" type="text" value="<?php echo $Dadosinfor['Nif']; ?>" name="Nif"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Endereco</label>
                  <input class="form-control" type="text" value="<?php echo $Dadosinfor['Endereco']; ?>" name="Endereco"  placeholder="Enter your email">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Contacto</label>
                  <input class="form-control" type="text" value="<?php echo $Dadosinfor['Contacto'] ;?>"  name="Contacto" placeholder="Enter your name">
                    <input class="" hidden  type="text"  value="<?php echo $Dadosinfor['Id']; ?>" name="Id"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" name="Edit_fornecedor" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </main>
<?php require_once 'rodape.php'; ?>