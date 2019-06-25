<?php
	$nome= filter_input(INPUT_POST, "nome");
	$email= filter_input(INPUT_POST, "descricao");
	$telefone= filter_input(INPUT_POST, "quantidade");
	$telefone= filter_input(INPUT_POST, "precoVenda");

	$dados= array($nome, $descricao, $quantidade, $precoVenda);	
	
	include("Produto.php");
	$prod= new Produto();
	$prod->cadastrar($dados);
	
?>