<?php  
include("../Model/DAO/ProdutoDAO.php");
include("../Model/DTO/Produto.php");

$dao = new ProdutoDAO();
$produto = new Produto();

$cod = isset($_POST['cod']) ?	$_POST['cod'] : "";
$modelo = isset($_POST['modelo']) ?	$_POST['modelo'] : "";
$fabricante = isset($_POST['fabricante']) ?	$_POST['fabricante'] : "";
$estado = isset($_POST['estado']) ?	$_POST['estado'] : "";
$descricao = isset($_POST['descricao']) ?	$_POST['descricao'] : "";
$qtd = isset($_POST['qtd']) ?	$_POST['qtd'] : "";
$foto = isset($_FILES['foto']) ?	$_FILES['foto'] : "";
$stts = isset($_POST['stts']) ?	$_POST['stts'] : "";

$produto->setCod($cod);
$produto->setModelo($modelo);
$produto->setFabricante($fabricante);
$produto->setEstado($estado);
$produto->setDescricao($descricao);
$produto->setFoto($foto);
$produto->setStts($stts);

session_start();
if (isset($_SESSION['acesso'])) {
	if (isset($_POST['enviar']) and $_POST['enviar'] == "addproduto") {
		$produto->setStts("Em análise");
		$produto->setCod_usuario($_SESSION['cod']);
		if (!empty($produto->getFoto()["name"])) {
			if (!preg_match("/^image\/(jpeg|jpg|png|JPG|gif|)$/", $produto->getFoto()["type"])) {
				$_SESSION['erroft'] = true;
				header("location: ../View/solicitarOrc.php");
			}
			else{
				$resultado = explode(".", $produto->getFoto()["name"]);
				$extensao = $resultado[count($resultado) -1];
				$nome_imagem = "produto-" . md5(uniqid(time())) . "." . $extensao;
				var_dump($nome_imagem);
				$caminho_imagem = "../Imagens/produtos/" . $nome_imagem;
				move_uploaded_file($produto->getFoto()["tmp_name"], $caminho_imagem);
				$produto->setFoto($nome_imagem);
				if($p = $dao->inserir($produto)) {
					$_SESSION['ptmpqtd'] = $qtd;
					$_SESSION['ptmpcod'] = $p;
					include("AcoesOrcamento.php");
					orc();
				}
			}
		}else if(empty($produto->getFoto()["name"])){
			$produto->setFoto("sem-foto.jpg");
			if($p = $dao->inserir($produto)) {
				$_SESSION['ptmpqtd'] = $qtd;
				$_SESSION['ptmpcod'] = $p;
				include("AcoesOrcamento.php");
				orc();
			}
		}
	} 
}else{
	header("location: ../index.php");
}

function delprod(){
	$dao = new ProdutoDAO();
	$produto = new Produto();
	$dao->deletar($_SESSION['codprodtmp']);
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "editarProdutos"){
	if ($tst = $dao->atualizar($produto)) {	
		header("location: ../View/produtos.php?=Produto editado com sucesso");
	}else{
		echo("erro");
	}
}

?>