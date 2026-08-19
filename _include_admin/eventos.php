
<?php require_once "menu.php"; ?>
<main class="app-content">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">Cadastrar  Eventos</h3>
			<div class="tile-body">
				<?php if(isset($_GET['edit'])){
					$id = $_GET['edit'];
					$sqli = mysqli_query($connect, "SELECT * FROM eventos WHERE Id = $id");
					$dados = mysqli_fetch_array($sqli);
				?>
					
				<form  class="row" action="../_Config/eventos.php?edit=<?=$id?>" method="POST" enctype="multipart/form-data">
					<div class="form-group col-md-4">
						<label class="control-label ">Nome</label>
						<input class="form-control col-md-14" value="<?=$dados['Nome'];?>" type="text"name="Nome"  placeholder="Enter your name">
					</div>
					<hr>
					<div class="form-group col-md-4">
						<label class="control-label">Descricao</label>
						<textarea class="form-control" value="<?=$dados['Descricao']?>" type="text"name="Descricao"  placeholder="Enter your name"></textarea>
					</div>
					<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" name="edit_eventos" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
					</div>
				</form>
				<?php
			}else{
				?>
					<form  class="row" action="../_Config/eventos.php" method="POST" enctype="multipart/form-data">
					<div class="form-group col-md-4">
						<label class="control-label ">Nome</label>
						<input class="form-control col-md-14" type="text"name="Nome"  placeholder="Enter your name">
					</div>
					<hr>
					<div class="form-group col-md-4">
						<label class="control-label">Descricao</label>
						<textarea class="form-control" type="text"name="Descricao"  placeholder="Enter your name"></textarea>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Imagem</label>
						<input class="form-control" type="file"name="Imagem">
					</div>
					<div class="form-group col-md-4 align-self-end">
						<button class="btn btn-primary" name="cad_eventos" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastra</button>
					</div>
				</form>
				<?php
			}?>
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
			<th class="text-center" style="width: 200px;">Ação</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$cont = 1;
		$sqli = mysqli_query($connect, "SELECT * FROM eventos");
		while($dado=mysqli_fetch_array($sqli)){?> 
			<tr>
				<th scope="row"><?php echo $cont++; ?></th>
				<td>
			<img style="border-radius: 10px; padding: 1px; width: 50px;" src="../_imgParq/<?php echo ($dado['Imagem']); ?>">
				</td>
				<td><?php echo ($dado['Nome']); ?></td>
				<td><?php echo ($dado['Descricao']); ?></td>
				<th>
				<a href="eventos.php?edit=<?=$dado['Id'] ?>" class=" btn btn-outline-primary"><i style="font-size:10px;  margin-left: 10px;"></i>Editar</a> 
				<a href="../_Config/eventos.php?evento=<?=$dado['Id']?>" class=" btn btn-outline-danger"><i style="font-size:10px;  margin-left: 10px;"></i>Eliminar</a>
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