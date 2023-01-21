<?php
include("../Model/DAO/UsuarioDAO.php");
include("../Model/DTO/Usuario.php");
$dao = new UsuarioDAO();
$usuario = new Usuario();
$totalusers = $dao->listarTodos($usuario);
if (!empty($_SESSION['cod'])) {
	$userlog = $dao->carregar($_SESSION['cod']);
}

?>