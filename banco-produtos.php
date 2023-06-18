<?php
function adicionaProduto($conexao,$nome,$preco,$descrical){
$query = "insert into produtos (nome,preco,descricao) values ('{$nome}',{$preco},'{$descrical}')";
$foiInserido = mysqli_query($conexao,$query);
return $foiInserido;
	
}
function listaProdutos($conexao){

	$produtos = array();

	$query = "select * from produtos";

	$resultado = mysqli_query($conexao,$query);

	while ( $produto = mysqli_fetch_assoc($resultado) ){
		
		array_push($produtos,$produto);	

	}
	return $produtos;

}


function removeProduto($conexao,$id){
	$query="delete From produtos where id = {$id}";
	return mysqli_query($conexao,$query);
}