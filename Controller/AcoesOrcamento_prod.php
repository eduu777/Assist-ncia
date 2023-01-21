<?php
include("../Model/DAO/Orcamento_prodDAO.php");
include("../Model/DTO/Orcamento_prod.php");

date_default_timezone_set('America/Sao_Paulo');



function orc_prod(){
	$daoorc_prod = new Orcamento_prodDAO();
	$orcamento_prod = new Orcamento_prod();
	$orcamento_prod->setQtd($_SESSION['ptmpqtd']);
	$orcamento_prod->setCod_produto($_SESSION['ptmpcod']);
	$orcamento_prod->setCod_orcamento($_SESSION['otmpcod']);
	$daoorc_prod->inserir($orcamento_prod);
	header("location: ../View/solicitarOrcFinal.php");
} 

if(isset($_POST['enviar']) and $_POST['enviar'] == "Deletar"){
	$dao = new Orcamento_prodDAO;
	$orcamento_prod = new Orcamento_prod;
	$cod = isset($_POST['cod']) ?	$_POST['cod'] : "";
	$orcamento_prod->setCod($cod);
	session_start();
	if($op = $dao->carregar($orcamento_prod->getCod())){
		$_SESSION['codprodtmp'] = $op[0]['cod_produto'];
		$_SESSION['codo'] = $op[0]['cod_orcamento'];
		if($dao->deletar($orcamento_prod->getCod())){
			include("AcoesProduto.php");
			delprod();
			include("AcoesOrcamento.php");
			delorc();
			echo $_SESSION['codo'];
			echo $op[0]['cod_orcamento'];
		}

	}
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "DeletarpC"){
	$dao = new Orcamento_prodDAO;
	$orcamento_prod = new Orcamento_prod;
	$cod = isset($_POST['cod']) ?	$_POST['cod'] : "";
	$orcamento_prod->setCod($cod);
	session_start();
	if($op = $dao->carregar($orcamento_prod->getCod())){
		$_SESSION['codprodtmp'] = $op[0]['cod_produto'];
		$_SESSION['codo'] = $op[0]['cod_orcamento'];
		if($dao->deletar($orcamento_prod->getCod())){
			include("AcoesProduto.php");
			delprod();
			include("AcoesOrcamento.php");
			delorcpc();
			echo $_SESSION['codo'];
			echo $op[0]['cod_orcamento'];
		}

	}
}
?>