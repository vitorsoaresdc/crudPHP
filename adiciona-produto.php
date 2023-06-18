<?php include('cabecalho.php'); ?>
<?php include('conecta.php'); ?>
<?php include('banco-produtos.php'); ?>
<?php 

$nome = $_POST['nome'] ;
$preco = $_POST['preco'] ;
$descricao = $_POST['descricao'] ;


if (adicionaProduto($conexao,$nome,$preco,$descricao)) {?>

<p class="alert alert-success">Produto <?= $nome ?> adicionado com sucesso!!!</p>

<?php } else{ ?>
<p class="alert alert-danger">Produto <?= $nome ?> Não foi adicionado com sucesso!!!</p>
<?php } 

?>

<?php include('rodape.php'); ?>