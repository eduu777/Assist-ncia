<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class OrcamentoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Carrega um elemento pela chave do cliente
	public function carregar_cliente($cod_cliente){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento WHERE cod_cliente = :cod_cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod_cliente",$cod_cliente);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM orcamento ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM orcamento WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga um elemento da tabela
	public function deletar_user($cod_cliente){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM orcamento WHERE cod_cliente = :cod_cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod_cliente",$cod_cliente);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	
	//Insere um elemento na tabela
	public function inserir($orcamento){
		include("../Model/conexao.php");
		$sql = 'INSERT INTO orcamento (cod, data, hora, stts, descricao, cod_cliente, cod_adm) VALUES (:cod, :data, :hora, :stts, :descricao, :cod_cliente, :cod_adm)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$orcamento->getCod()); 
		$consulta->bindValue(':data',$orcamento->getData()); 
		$consulta->bindValue(':hora',$orcamento->getHora()); 
		$consulta->bindValue(':stts',$orcamento->getStts()); 
		$consulta->bindValue(':descricao',$orcamento->getDescricao()); 
		$consulta->bindValue(':cod_cliente',$orcamento->getCod_cliente()); 
		$consulta->bindValue(':cod_adm',$orcamento->getCod_adm()); 
		if($consulta->execute())
			return($conexao->lastInsertId(PDO::FETCH_ASSOC));
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($orcamento){
		include("../Model/conexao.php");
		$sql = 'UPDATE orcamento SET cod = :cod, data = :data, hora = :hora, stts = :stts, descricao = :descricao, valor = :valor, cod_adm = :cod_adm WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$orcamento->getCod()); 
		$consulta->bindValue(':data',$orcamento->getData()); 
		$consulta->bindValue(':hora',$orcamento->getHora()); 
		$consulta->bindValue(':stts',$orcamento->getStts()); 
		$consulta->bindValue(':descricao',$orcamento->getDescricao()); 
		$consulta->bindValue(':valor',$orcamento->getValor()); 
		$consulta->bindValue(':cod_adm',$orcamento->getCod_adm()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM orcamento';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>