<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class Orcamento_prodDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento_prod WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Carrega um elemento pela chave do orcamento
	public function carregar_orc($cod_orcamento){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento_prod WHERE cod_orcamento = :cod_orcamento';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod_orcamento",$cod_orcamento);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Carrega um elemento pela chave do produto
	public function carregar_prod($cod_produto){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento_prod WHERE cod_produto = :cod_produto';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod_produto",$cod_produto);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento_prod';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento_prod ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM orcamento_prod WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($orcamento_prod){
		include("../Model/conexao.php");
		$sql = 'INSERT INTO orcamento_prod (qtd, cod_orcamento, cod_produto, cod) VALUES (:qtd, :cod_orcamento, :cod_produto, :cod)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':qtd',$orcamento_prod->getQtd()); 
		$consulta->bindValue(':cod_orcamento',$orcamento_prod->getCod_orcamento()); 
		$consulta->bindValue(':cod_produto',$orcamento_prod->getCod_produto()); 
		$consulta->bindValue(':cod',$orcamento_prod->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($orcamento_prod){
		include("../Model/conexao.php");
		$sql = 'UPDATE orcamento_prod SET qtd = :qtd, cod_orcamento = :cod_orcamento, cod_produto = :cod_produto, cod = :cod WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':qtd',$orcamento_prod->getQtd()); 
		$consulta->bindValue(':cod_orcamento',$orcamento_prod->getCod_orcamento()); 
		$consulta->bindValue(':cod_produto',$orcamento_prod->getCod_produto()); 
		$consulta->bindValue(':cod',$orcamento_prod->getCod()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM orcamento_prod';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>