<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class UsuarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM usuario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM usuario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM usuario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($usuario){
		include("../Model/conexao.php");
		$sql = 'INSERT INTO usuario (email, rua, numero, cep, bairro, ponto_ref, comp, nome, senha, tel1, tel2, acesso, foto) VALUES (:email, :rua, :numero, :cep, :bairro, :ponto_ref, :comp, :nome, :senha, :tel1, :tel2, :acesso, :foto)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':email',$usuario->getEmail()); 
		$consulta->bindValue(':rua',$usuario->getRua()); 
		$consulta->bindValue(':numero',$usuario->getNumero()); 
		$consulta->bindValue(':cep',$usuario->getCep()); 
		$consulta->bindValue(':bairro',$usuario->getBairro()); 
		$consulta->bindValue(':ponto_ref',$usuario->getPonto_ref()); 
		$consulta->bindValue(':comp',$usuario->getComp()); 
		$consulta->bindValue(':nome',$usuario->getNome()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		$consulta->bindValue(':tel1',$usuario->getTel1()); 
		$consulta->bindValue(':tel2',$usuario->getTel2()); 
		$consulta->bindValue(':acesso',$usuario->getAcesso()); 
		$consulta->bindValue(':foto',$usuario->getFoto()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($usuario){
		include("../Model/conexao.php");
		$sql = 'UPDATE usuario SET cod = :cod, email = :email, rua = :rua, numero = :numero, cep = :cep, bairro = :bairro, ponto_ref = :ponto_ref, comp = :comp, nome = :nome, tel1 = :tel1, tel2 = :tel2, acesso = :acesso WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$usuario->getCod()); 
		$consulta->bindValue(':email',$usuario->getEmail()); 
		$consulta->bindValue(':rua',$usuario->getRua()); 
		$consulta->bindValue(':numero',$usuario->getNumero()); 
		$consulta->bindValue(':cep',$usuario->getCep()); 
		$consulta->bindValue(':bairro',$usuario->getBairro()); 
		$consulta->bindValue(':ponto_ref',$usuario->getPonto_ref()); 
		$consulta->bindValue(':comp',$usuario->getComp()); 
		$consulta->bindValue(':nome',$usuario->getNome()); 
		$consulta->bindValue(':tel1',$usuario->getTel1()); 
		$consulta->bindValue(':tel2',$usuario->getTel2()); 
		$consulta->bindValue(':acesso',$usuario->getAcesso());
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Atualiza a foto
	public function atualizarft($usuario){
		include("../Model/conexao.php");
		$sql = 'UPDATE usuario SET foto = :foto WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$usuario->getCod());
		$consulta->bindValue(':foto',$usuario->getFoto()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

		//Atualiza a senha
	public function atualizarsenha($usuario){
		include("../Model/conexao.php");
		$sql = 'UPDATE usuario SET senha = :senha WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$usuario->getCod());
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../Model/conexao.php");
		$sql = 'DELETE FROM usuario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Carrega o usuário pela senha e o email
	function logar($usuario){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM usuario WHERE email = :email AND senha = :senha';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':email', $usuario->getEmail());
		$consulta->bindValue(':senha', $usuario->getSenha());
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}

	//Carrega o usuário pelo email
	function carregar_email($usuario){
		include("../Model/conexao.php");
		$sql = 'SELECT * FROM usuario WHERE email = :email';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':email', $usuario->getEmail());
		$consulta->execute();
		return ($consulta->fetch(PDO::FETCH_ASSOC));
	}
}
?>