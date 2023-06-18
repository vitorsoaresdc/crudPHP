<?php include('cabecalho.php') ?>
<?php include('conecta.php') ?>
<?php include('banco-produtos.php') ?>

<?php $foiRemovido = removeProduto($conexao,$_POST['id']); ?>

<?php if($foiRemovido) { ?>

<p class="alert alert-success">produto foi removido com sucesso</p>

<?php } else { ?>

<p class="alert alert-danger">não removido com sucesso!</p>

<?php } ?>

<?php include('rodape.php') ?>
