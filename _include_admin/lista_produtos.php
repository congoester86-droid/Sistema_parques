   <?php require_once "menu.php"; ?>
   <main class="app-content">
    <div class="app-title">
      <div>

      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <section class="invoice">
            <div class="row mb-4">
              <div class="col-6">
                <a href="cad_produtos.php"><h2 class="page-header">   </i>Adicionar Equipamentos</h2></a>
              </div>
              <div class="col-6">
                <h5 class="text-right"><?php echo "".date('h:m:s') ?></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table">
                  <thead>
                  </tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Quantidade</th>
                  <th>Código de Barra</th>
                  <th>dataValidade</th>
                  <th>Fornecedor</th>
                  <th>Estado</th>
                  <th class="text-center" style="width: 200px;">Ação</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $cont = 1;
                $sqli = mysqli_query($connect, "SELECT * FROM produto");
                while($dado=mysqli_fetch_array($sqli)){?> 
                  <tr>
                    <th scope="row"><?php echo $cont++; ?></th>
                    <td><?php echo ($dado['Nome']); ?></td>
                    <td><?php echo ($dado['Quant']); ?></td>
                    <td><?php echo ($dado['codBarra']); ?></td>
                    <td><?php echo ($dado['dataValidade']); ?></td>
                    <td><?php echo ($dado['Fornecedor']); ?></td>
                    <td><?php echo ($dado['Estado']); ?></td>
                    <th> 
                     <a href="edit_produto.php?EditProduto=<?php echo ($dado['Id']); ?>" class=" btn btn-outline-primary "><i style="font-size:10px;  margin-left: 10px;"></i>Editar</a>
                     <a href="../_Config/deletar.php?DeletProduto=<?php echo ($dado['Id']); ?>" class="btn btn-outline-danger" ><i style="font-size:10px;" ></i>Eliminar</a>                     
                   </th>
                 </tr>
               </tr>
             </tbody> 
           <?php }?>
         </table>
       </div>
     </div>
   </section>
 </div>
</div>
</div>
</main>
<?php require_once 'rodape.php'; ?>
