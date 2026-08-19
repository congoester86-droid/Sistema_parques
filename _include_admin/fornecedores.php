<?php require_once "menu.php"; ?>
   <main class="app-content">
      <div class="app-title">
       
       
      </div>
  
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Cadastrar Fornecedor</h3>
            <div class="tile-body">
              <form  class="row" action="../_Config/cad_fornecedor.php" method="POST">
                <div class="form-group col-md-4">
                  <label class="control-label ">Nome</label>
                  <input class="form-control col-md-14" type="text"name="Nome"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Nif</label>
                  <input class="form-control col-md-14" type="text"name="Nif"  placeholder="Enter your email">
                </div>
                <hr>
                 <div class="form-group col-md-4">
                  <label class="control-label">Endereço</label>
                  <input class="form-control" type="text"name="Endereco"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Contacto</label>
                  <input class="form-control" type="text"name="Contacto"  placeholder="Enter your email">
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" name="cadfornecedor" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table">
                                            <thead>
                                            </tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Nif</th>
                                            <th>Endereco</th>
                                            <th>Contacto</th>
                                            <th class="text-center" style="width: 200px;">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $cont = 1;
                                        $sqli = mysqli_query($connect, "SELECT * FROM fornecedores");
                                        while($dado=mysqli_fetch_array($sqli)){?> 
                                            <tr>
                                                <th scope="row"><?php echo $cont++; ?></th>
                                                <td><?php echo ($dado['Nome']); ?></td>
                                                <td><?php echo ($dado['Nif']); ?></td>
                                                <td><?php echo ($dado['Endereco']); ?></td>
                                                <td><?php echo ($dado['Contacto']); ?></td>
                                                <th> 
                                                   <a href="edit_fornecedor.php?edit_fornecedor=<?php echo ($dado['Id']); ?>" class=" btn btn-outline-primary "><i style="font-size:10px;  margin-left: 10px;"></i>Editar</a>
                                                    
                                                </th>
                                            </tr>
                                        </tr>
                                    </tbody> 
                                <?php }?>
                            </table>
                </div>
              </div>
    </main>
<?php require_once 'rodape.php'; ?>