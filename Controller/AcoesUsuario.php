<?php  
include("../Model/DAO/UsuarioDAO.php");
include("../Model/DTO/Usuario.php");

$dao = new UsuarioDAO();
$usuario = new Usuario();

$cod = isset($_POST['cod']) ?	$_POST['cod'] : "";
$email = isset($_POST['email']) ?	$_POST['email'] : "";
$s = md5(isset($_POST['senha']) ?	$_POST['senha'] : "");
$nome = isset($_POST['nome']) ?	$_POST['nome'] : "";
$rua =  isset($_POST['rua']) ?	$_POST['rua'] : "";	
$num = isset($_POST['num_endereco']) ?	$_POST['num_endereco'] : "";
$ponto_ref = isset($_POST['ponto_ref']) ?	$_POST['ponto_ref'] : ""; 
$comp =  isset($_POST['comp']) ?	$_POST['comp'] : "";	
$cep = isset($_POST['cep']) ?	$_POST['cep'] : ""; 
$bairro =  isset($_POST['bairro']) ?	$_POST['bairro'] :"";
$tel1 = isset($_POST['tel1']) ?	$_POST['tel1'] : "";
$acesso = isset($_POST['acesso']) ?	$_POST['acesso'] : "";
$foto = isset($_FILES['foto']) ?	$_FILES['foto'] : "";
$santiga = md5(isset($_POST['senhaantiga']) ?	$_POST['senhaantiga'] : "");

$usuario->setCod($cod);
$usuario->setEmail($email);
$usuario->setSenha($s);
$usuario->setNome($nome);
$usuario->setRua($rua);
$usuario->setNumero($num);
$usuario->setPonto_ref($ponto_ref);
$usuario->setComp($comp);
$usuario->setCep($cep);
$usuario->setBairro($bairro);
$usuario->setTel1($tel1);
$usuario->setAcesso($acesso);
$usuario->setFoto($foto);

if(isset($_POST['enviar']) and $_POST['enviar'] == "Cadastrar"){
	$tstemail = $dao->carregar_email($usuario);
	$usuario->setFoto("2e437a22dd80df6be717d5b8d73b0b81.png");
	session_start();
	if (isset($_SESSION['acesso'])) {
		if (is_array($tstemail) && count($tstemail)>=0) {
			session_start();
			$_SESSION['emailemuso'] = true;
			header("location: ../View/tabelacontas.php?=Email já cadastrado");
		}else{
			$r = $dao->listarTodos($usuario);
			if (count($r)==0) {
				$usuario->setAcesso("adm");
			}else{
				$usuario->setAcesso("cliente");
			}
			if($dao->inserir($usuario)){
				header("location:../View/tabelacontas.php");
			}
			else{
				$_SESSION['errocad'] = true;
				header("location:../View/tabelacontas.php");
			}
		}	
	}else{
		if (is_array($tstemail) && count($tstemail)>=0) {
			session_start();
			$_SESSION['emailemuso'] = true;
			header("location: ../View/cadastrar.php?=Email já cadastrado");
		}
		else{
			$r = $dao->listarTodos($usuario);
			if (count($r)==0) {
				$usuario->setAcesso("adm");
			}else{
				$usuario->setAcesso("cliente");
			}
			if($dao->inserir($usuario)){
				$tstlog = $dao->Logar($usuario);
				if(is_array($tstlog) && count($tstlog)>0){
					$_SESSION['usuario'] = $tstlog['nome'];
					$_SESSION['acesso'] = $tstlog['acesso'];
					$_SESSION['foto'] = $tstlog['foto'];
					$_SESSION['cod'] = $tstlog['cod'];
					if($_SESSION['acesso'] == 'adm'){
						header("location:../View/AddFoto.php");		
					}
					else if($_SESSION['acesso'] == 'cliente'){
						header("location:../View/addFoto.php");				
					}

				}
			}
			else{
				$_SESSION['errocad'] = true;
				header("location:../View/cadastrar.php");
			}
		}	
	}

	

}

if(isset($_POST['enviar']) and $_POST['enviar'] == "logar"){
	$tstlog = $dao->Logar($usuario);
	session_start();
	if(is_array($tstlog) && count($tstlog)>0){
		$_SESSION['usuario'] = $tstlog['nome'];
		$_SESSION['acesso'] = $tstlog['acesso'];
		$_SESSION['foto'] = $tstlog['foto'];
		$_SESSION['cod'] = $tstlog['cod'];
		if($_SESSION['acesso'] == 'adm'){
			header("location:../View/pagAdm.php");		
		}
		else if($_SESSION['acesso'] == 'cliente'){
			header("location:../View/pagUser.php");				
		}

	}
	else{
		$_SESSION['erro'] = true;	
		header("location:../View/login.php");
	}
}


if(isset($_POST['enviar']) and $_POST['enviar'] == "Editar"){
	if ($dao->atualizar($usuario)) {
		session_start();
		if ($_SESSION['cod'] == $usuario->getCod()) {
			if ($_SESSION['acesso'] == "cliente") {
				header("location: ../View/editarUser.php");
			}else{
				header("location:../View/editarAdm.php");
			}
		}
		else{
			header("location:../View/tabelacontas.php");
		}	
	}else{
		echo("erro");
	}
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "Deletar"){
	if ($dao->deletar($usuario->getCod())) {
		header("location:../View/tabelacontas.php");	
	}else{
		echo("erro");
	}
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "addFoto"){
	session_start();
	$usuario->setCod($_SESSION['cod']);
	if (!empty($usuario->getFoto()["name"])) {
		if (!preg_match("/^image\/(jpeg|jpg|png|JPG|gif|)$/", $usuario->getFoto()["type"])) {
			$_SESSION['erroftUser'] = true;
			header("location: ../View/addFoto.php");
		}else{
			$resultado = explode(".", $usuario->getFoto()["name"]);
			$extensao = $resultado[count($resultado) -1];
			$nome_imagem = "usuario-" . md5(uniqid(time())) . "." . $extensao;
			var_dump($nome_imagem);
			$caminho_imagem = "../Imagens/usuarios/" . $nome_imagem;
			move_uploaded_file($usuario->getFoto()["tmp_name"], $caminho_imagem);
			$usuario->setFoto($nome_imagem);
			if($ft = $dao->atualizarft($usuario)) {
				if ($_SESSION['acesso'] == "adm") {
					$_SESSION['foto'] = $ft;
					header("location: ../View/pagAdm.php");
				}else{
					header("location: ../View/pagUser.php");
				}
			}
		}
	}else if(empty($usuario->getFoto()["name"])){
		$_SESSION['semfoto'] = true;
		header("location: ../View/addfoto.php?=nenhuma alteração realizada");
	}
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "altFoto"){
	session_start();
	$usuario->setCod($_SESSION['cod']);
	if (!empty($usuario->getFoto()["name"])) {
		if (!preg_match("/^image\/(jpeg|jpg|png|JPG|gif|)$/", $usuario->getFoto()["type"])) {
			if ($_SESSION['acesso'] == "adm") {
				$_SESSION['erroftUser'] = true;
				header("location: ../View/editarAdm.php");
			}else{
				$_SESSION['erroftUser'] = true;
				header("location: ../View/editarUser.php");
			}
		}else{
			$resultado = explode(".", $usuario->getFoto()["name"]);
			$extensao = $resultado[count($resultado) -1];
			$nome_imagem = "usuario-" . md5(uniqid(time())) . "." . $extensao;
			var_dump($nome_imagem);
			$caminho_imagem = "../Imagens/usuarios/" . $nome_imagem;
			move_uploaded_file($usuario->getFoto()["tmp_name"], $caminho_imagem);
			$usuario->setFoto($nome_imagem);
			if($ft = $dao->atualizarft($usuario)) {
				if ($_SESSION['acesso'] == "adm") {
					$_SESSION['foto'] = $ft;
					header("location: ../View/editarAdm.php");
				}else{
					header("location: ../View/editarUser.php");
				}
			}
		}
	}else if(empty($usuario->getFoto()["name"])){
		if ($_SESSION['acesso'] == "adm") {
			$_SESSION['semfoto'] = true;
			header("location: ../View/editarAdm.php?=nenhuma alteração realizada");
		}else{
			$_SESSION['semfoto'] = true;
			header("location: ../View/editarUser.php?=nenhuma alteração realizada");
		}
	}
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "erroDeletar"){
	session_start();
	$_SESSION['codclientedelet'] = $usuario->getCod();
	header("location:../View/visualizarOrcspUser.php?=$cod");	
}

if(isset($_POST['enviar']) and $_POST['enviar'] == "editarSenha"){
	session_start();
	$user = $dao->carregar($_SESSION['cod']);
	if ($user[0]['senha'] == $santiga) {
		$cod = $user[0]['cod'];
		$usuario->setCod($cod);
		$usuario->setSenha($s);
		if ($dao->atualizarsenha($usuario)) {
			header("location: ../View/editarUser.php?=Senha alterada com susesso");
		}
	}else{
		if ($_SESSION['acesso'] == "adm") {
			$_SESSION['erroaltsenha'] = true;
			header("location: ../View/editarAdm.php?=Senha inválida");
		}else{
			$_SESSION['erroaltsenha'] = true;
			header("location: ../View/editarUser.php?=Senha inválida");
		}
	}
}
?>