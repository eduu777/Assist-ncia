<?php
function protect_adm(){
	

	if (!isset($_SESSION)) 
		session_start();

	if (!empty($_SESSION['usuario'])) {
		if($_SESSION['acesso'] != 'adm'){
			header("location:/assistencia/View/pagUser.php");
		}
	}else{
		header("location:../index.php");
	}
}     

function protect(){
	

	if (!isset($_SESSION)) 
		session_start();

	if (!empty($_SESSION['usuario'])) {
		if($_SESSION['acesso'] != 'cliente'){
			header("location:/assistencia/View/pagAdm.php");
		}
	}else{
		header("location:../View/login.php");
	}
}  

function tstlog(){
	if (!empty($_SESSION['usuario'])) {
		if($_SESSION['acesso'] != 'cliente'){
			header("location:/assistencia/View/pagAdm.php");
		}else if($_SESSION['acesso'] != 'adm'){
			header("location:/assistencia/View/pagUser.php");
		}
	}
}            
?>