<?php include("banco-produtos.php") ?>
<?php include("conecta.php") ?>
<?php include("cabecalho.php") ?>


<?php 

$produtos = listaProdutos($conexao);?>

	<table class="table table-hover table-bordered table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>nome</th>
			<th>preço</th>
			<th>descrição</th>
			<th>excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($produtos as $produto){ ?>
			
			<tr>
				<td><?= $produto['id'] ?></td>
				<td><?= $produto['nome'] ?></td>
				<td><?= $produto['preco'] ?></td>
				<td><?= substr($produto['descricao'],0,15)?></td>

				<td><form action="remove-produto.php" method="POST">
				<input type="hidden" name="id" value="<?= $produto['id'] ?>" >
				<button class="btn btn-danger btn-xs">EXCLUIR</button>

					
				</form></td>
			</tr>

		<?php } ?> 
	</tbody>
	</table>


<?php include("rodape.php") ?>