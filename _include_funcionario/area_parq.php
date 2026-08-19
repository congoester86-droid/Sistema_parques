<?php require_once "menu.php"; ?>
<main class="app-content">
  <div class="row"> 
    <div class="col-md-12">
      <div class="tile">
        <section class="invoice">
          <div class="row mb-4">
            <div class="col-6">
                <h2 class="page-header">   </i>Áreas dos Parques</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table">
                <thead>
                  </tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Endereco</th>
                  <th>Telefone</th>
                  <th>Perfil</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $cont = 1;
                  $sqli = mysqli_query($connect, "SELECT * FROM area_parq");
                  while ($dado = mysqli_fetch_array($sqli)) { ?>
                    <tr>
                      <th scope="row"><?php echo $cont++; ?></th>
                      <td>
                        <img style="border-radius: 10px; padding: 1px; width: 50px;" src="../_imgParq/<?php echo ($dado['Imagem']); ?>">
                      </td>
                      <td><?php echo ($dado['Nome']); ?></td>
                      <td><?php echo ($dado['Descricao']); ?></td>
                      <td><?php echo ($dado['zona_parq']); ?></td>
                      <td><?php echo ($dado['nome_parq']); ?></td>
                    </tr>
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
