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
                <a href="cad_produtos.php"><h2 class="page-header">   </i>Adicionar Reservas</h2></a>
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
                  <th>Bilhete</th>
                  <th>Telefone</th>
                  <th>Data de Rservas</th>
                  <th>Data efectuada</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $cont = 1;
                $sqli = mysqli_query($connect, "SELECT * FROM reservas");
                while($dado=mysqli_fetch_array($sqli)){?> 
                  <tr>
                    <th scope="row"><?php echo $cont++; ?></th>
                    <td><?php echo ($dado['Nome']); ?></td>
                    <td><?php echo ($dado['bi']); ?></td>
                    <td><?php echo ($dado['Telefone']); ?></td>
                    <td><?php echo ($dado['Data']); ?></td>
                    <td><?php echo ($dado['DataRe']); ?></td>
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
