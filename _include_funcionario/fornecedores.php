<?php require_once "menu.php"; ?>
<main class="app-content">
  <div class="app-title">
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
              <a href="cad_utilizadores.php">
                <h2 class="page-header">   </i>Adicionar Utilizadores</h2>
              </a>
            </div>
             
          </div>
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Nif</th>
                    <th>Endereco</th>
                    <th>Contacto</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $cont = 1;
                  $sqli = mysqli_query($connect, "SELECT * FROM fornecedores");
                  while ($dado = mysqli_fetch_array($sqli)) { ?>
                    <tr>
                      <th scope="row"><?php echo $cont++; ?></th>
                      <td><?php echo ($dado['Nome']); ?></td>
                      <td><?php echo ($dado['Nif']); ?></td>
                      <td><?php echo ($dado['Endereco']); ?></td>
                      <td><?php echo ($dado['Contacto']); ?></td>
                    </tr>
                </tbody>
              <?php } ?>
              </table>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<?php require_once 'rodape.php'; ?>