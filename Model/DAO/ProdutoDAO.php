<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ProdutoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM produto WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM produto';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM produto ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM produto WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Apaga um elemento da tabela pelo código do usuáeio
	public function deletar_cod_user($cod_usuario){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM produto WHERE cod_usuario = :cod_usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod_usuario",$cod_usuario);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Insere um elemento na tabela
	public function inserir($produto){
		include("../Model/conexao.php");
		$sql = 'INSERT INTO produto (cod, modelo, fabricante, estado, foto, stts, descricao, nome, cod_usuario) VALUES (:cod, :modelo, :fabricante, :estado, :foto, :stts, :descricao, :nome, :cod_usuario)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 
		$consulta->bindValue(':modelo',$produto->getModelo()); 
		$consulta->bindValue(':fabricante',$produto->getFabricante()); 
		$consulta->bindValue(':estado',$produto->getEstado()); 
		$consulta->bindValue(':foto',$produto->getFoto()); 
		$consulta->bindValue(':stts',$produto->getStts()); 
		$consulta->bindValue(':descricao',$produto->getDescricao()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':cod_usuario',$produto->getCod_usuario()); 
		if($consulta->execute()){
			return($conexao->lastInsertId(PDO::FETCH_ASSOC));
		}else{
			return false;
		}
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($produto){
		include("../Model/conexao.php");
		$sql = 'UPDATE produto SET cod = :cod, modelo = :modelo, fabricante = :fabricante, estado = :estado, stts = :stts, descricao = :descricao, nome = :nome WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$produto->getCod()); 
		$consulta->bindValue(':modelo',$produto->getModelo()); 
		$consulta->bindValue(':fabricante',$produto->getFabricante()); 
		$consulta->bindValue(':estado',$produto->getEstado());
		$consulta->bindValue(':stts',$produto->getStts()); 
		$consulta->bindValue(':descricao',$produto->getDescricao()); 
		$consulta->bindValue(':nome',$produto->getNome());
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM produto';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>