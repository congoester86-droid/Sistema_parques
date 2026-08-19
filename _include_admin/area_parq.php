<?php require_once "menu.php"; ?>
<main class="app-content">
  <div class="app-title">
  </div>
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Cadastrar Area Parque</h3>
      <div class="tile-body">
        <form  class="row" action="../_Config/parque.php" method="POST"  enctype="multipart/form-data">
          <div class="form-group col-md-4">
            <label class="control-label ">Nome</label>
            <input class="form-control col-md-14" type="text"name="Nome"  placeholder="Enter your name">
          </div>
          <hr>
          <div class="form-group col-md-4">
            <label class="control-label">Descricao</label>
            <input class="form-control" type="text"name="Descricao"  placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Parque</label>
            <select name="nome_parq" class="form-control">
              <option>Selecione um parque</option>
              <?php $sqli=mysqli_query($connect, "SELECT * FROM parque");
              while($dados=mysqli_fetch_array($sqli)){ ?>
                <option value="<?php echo $dados['Nome'];?>"><?php echo $dados['Nome'];?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Area de Parque</label>
            <select name="zona_parq" class="form-control">
              <option>Selecione uma área</option>
              <?php $sqli=mysqli_query($connect, "SELECT * FROM zona_parq");
              while($dados=mysqli_fetch_array($sqli)){ ?>
                <option value="<?php echo $dados['Nome'];?>"><?php echo $dados['Nome'];?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label class="control-label">Imagem</label>
            <input class="form-control" type="file"name="Imagem"  >
          </div>
          <div class="form-group col-md-4 align-self-end">
            <button class="btn btn-primary" name="cad_" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
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
      <th>Imagem</th>
      <th>Nome</th>
      <th>Descricao</th>
      <th>Area Parque</th>
      <th>Parque</th>

      <th class="text-center" style="width: 200px;">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $cont = 1;
    $sqli = mysqli_query($connect, "SELECT * FROM area_parq");
    while($dado=mysqli_fetch_array($sqli)){?> 
      <tr>
        <th scope="row"><?php echo $cont++; ?></th>
        <td>
          <img style="border-radius: 10px; padding: 1px; width: 50px;" src="../_imgParq/<?php echo ($dado['Imagem']); ?>">
        </td>
        <td><?php echo ($dado['Nome']); ?></td>
        <td><?php echo ($dado['Descricao']); ?></td>
        <td><?php echo ($dado['zona_parq']); ?></td>
        <td><?php echo ($dado['nome_parq']); ?></td>
        <th> 
         <a href="../_Config/deletar.php?delete_area=<?php echo ($dado['Id']); ?>" class=" btn btn-outline-danger"><i style="font-size:10px;  margin-left: 10px;"></i>Eliminar</a>
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