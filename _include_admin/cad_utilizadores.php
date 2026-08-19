<?php require_once "menu.php"; ?>
   <main class="app-content">
      <div class="app-title">
        
       
      </div>
  
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Cadastrar Funcionarios</h3>
            <div class="tile-body">
              <form  class="row" action="../_Config/cad_funcionarios.php" method="POST">
                <div class="form-group col-md-4">
                  <label class="control-label ">Nome</label>
                  <input class="form-control col-md-14" type="text"name="Nome"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Sobrenome</label>
                  <input class="form-control col-md-14" type="text" name="Sobrenome"  placeholder="Digite o Sobrenome">
                </div>
                <hr>
                 <div class="form-group col-md-4">
                  <label class="control-label">NIF</label>
                  <input class="form-control" type="text"name="Nif"  placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Endereco</label>
                  <input class="form-control" type="text"name="Endereco"  placeholder="Enter your email">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Telefone</label>
                  <input class="form-control" type="text" name="Telefone" placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="text" name="Email" placeholder="Enter your email">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Sexo</label>
                  <select name="Sexo" id="" class="form-control">
                    <option>Selecione um sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                  </select>
                  
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Senha</label>
                  <input class="form-control" type="text" name="Senha" placeholder="Enter your email">
                </div>
                <div class="form-group col-md-4 align-self-end">
                  <button class="btn btn-primary" name="cad_funcionario" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </main>
<?php require_once 'rodape.php'; ?>