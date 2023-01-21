<?php  
include("../Model/DAO/OrcamentoDAO.php");
include("../Model/DTO/Orcamento.php");

date_default_timezone_set('America/Sao_Paulo');
function orc() {
	$dao = new OrcamentoDAO();
	$orcamento = new Orcamento();
	$orcamento->setCod_cliente($_SESSION['cod']);
	$orcamento->setStts("Aguardando resposta");
	$orcamento->setData(date('d/m/y'));
	$orcamento->setHora(date('h:i:s', time()));
	if($o = $dao->inserir($orcamento));{
		$_SESSION['otmpcod'] = $o;
		include("AcoesOrcamento_prod.php");
		orc_prod();
	}

}


$dao = new OrcamentoDAO();
$orcamento = new Orcamento();

$cod  = isset($_POST['cod']) ?	$_POST['cod'] : "";
$valor  = isset($_POST['valor']) ?	$_POST['valor'] : "";
$descricao = isset($_POST['descricao']) ?	$_POST['descricao'] : "";
$data = isset($_POST['data']) ?	$_POST['data'] : "";
$hora = isset($_POST['hora']) ?	$_POST['hora'] : "";

$orcamento->setCod($cod);
$orcamento->setValor($valor);
$orcamento->setDescricao($descricao);
$orcamento->setData($data);
$orcamento->setHora($hora);

if(isset($_POST['enviar']) and $_POST['enviar'] == "responderOrc"){
	session_start();
	$orcamento->setStts("Orçamento Respondido");
	$orcamento->setCod_adm($_SESSION['cod']);
	if ($dao->atualizar($orcamento)) {
		header("location:../View/orcamentos.php");	
	}else{
		echo("erro");
	}
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "VisuOrc"){
	$dao = new OrcamentoDAO();
	$orcamento = new Orcamento();
	$cod  = isset($_POST['cod']) ?	$_POST['cod'] : "";
	session_start();
	$_SESSION['cod_orc'] = $cod;
	header("location: ../View/viewOrc.php?=$cod");


}

function delorc(){
	$dao = new OrcamentoDAO();
	$orcamento = new Orcamento();
	$dao->deletar($_SESSION['codo']);
	header("location: ../View/orcamentos.php");
}

function delorcpc(){
	$dao = new OrcamentoDAO();
	$orcamento = new Orcamento();
	$dao->deletar($_SESSION['codo']);
	header("location: ../View/visualizarOrcspUser.php");
}
?>