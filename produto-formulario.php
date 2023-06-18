<?php include('cabecalho.php'); ?>
	<form action="adiciona-produto.php" method="post">
		
		<div class="form-group">
		   <label>Nome:</label>
		   <input class="form-control" type="text" name="nome" required>
		</div>

		<div class="form-group">
		   <label>Preço:</label>
		   <input class="form-control" type="text" name="preco">
		</div>
		<div class="form-group">
		<label>descrição:</label>
		<textarea class="form-control" name="descricao"></textarea>
			

		</div>
		<input class="btn btn-primary" type="submit" value="Salvar" required>
	</form>
<?php include('rodape.php'); ?>
	