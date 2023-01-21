<?php 
session_start();
include("../Controller/protect.php");
protect();
include("../Model/DAO/OrcamentoDAO.php");
include("../Model/DTO/Orcamento.php");
include("../Model/DAO/UsuarioDAO.php");
include("../Model/DTO/Usuario.php");
include("../Model/DAO/ProdutoDAO.php");
include("../Model/DTO/Produto.php");
include("../Model/DAO/Orcamento_prodDAO.php");
include("../Model/DTO/Orcamento_prod.php");
$daouser = new UsuarioDAO();
$user = $daouser->carregar($_SESSION['cod']);
$dao = new OrcamentoDAO();
$produto = new Orcamento;
$orc = $dao->carregar($_SESSION['cod_orc']);
$daoop = new Orcamento_prodDAO();
$orc_p = $daoop->carregar_orc($orc[0]['cod']);
$daoprod = new produtoDAO();
$produto = new Produto; 
$prod = $daoprod->carregar($orc_p[0]['cod_produto']);

use Dompdf\Dompdf;

require_once("dompdf/autoload.inc.php");

$dompdf = new DOMPDF();

$dompdf->load_html('
      <h1>L&E Assistência</h1>
      <hr style="height:1px; width:100%; border-width:0; color:red; background-color:black">
			<br>
			<h1>Detalhes do Orcamento:</h1>
			<br>
            <h2>Produto:</h2>
            <table class="table">
              <thead style="background-color: #0d6efd";>
                <tr>
                  <th scope="col" style="color: white; width:80px;">Código</th>
                  <th scope="col" style="color: white; width:140px;">Modelo</th>
                  <th scope="col" style="color: white; width:120px;">Fabricante</th>
                  <th scope="col" style="color: white; width:100px;">Quantidade</th>
                  <th scope="col" style="color: white; width:100px;">Estado</th>
                  <th scope="col" style="color: white; width:140px;">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">'.$prod[0]["cod"].'</th>
                  <td>'.$prod[0]["modelo"].'</td>
                  <td>'.$prod[0]["fabricante"].'</td>
                  <td>'.$orc_p[0]["qtd"].'x</td>
                  <td>'.$prod[0]["estado"].'</td>
                  <td>'.$prod[0]["stts"].'</td>
                </tr>
              </tbody>
            </table>
            <h2>Orçamento:</h2>
            <table class="table">
              <thead style="background-color: #0d6efd">
                <tr>
                  <th scope="col" style="color: white; width:80px;">Código</th>
                  <th scope="col" style="color: white; width:100px;">Data</th>
                  <th scope="col" style="color: white; width:100px;">Hora</th>
                  <th scope="col" style="color: white; width:260px;">Status</th>
                  <th scope="col" style="color: white; width:150px;">Valor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">'.$orc[0]["cod"].'</th>
                  <td>'.$orc[0]["data"].'</td>
                  <td>'.$orc[0]["hora"].'</td>
                  <td>'.$orc[0]["stts"].'</td>
                  <td>'.$orc[0]["valor"].'</td>
                </tr>
              </tbody>
            </table>
            <img scr="../Imagens/produtos/sem-foto.jpg">
            <h2>Dados do cliente:</h2>
            <p><strong>Nome: </strong>'.$user[0]['nome'].'</p>
            <p><strong>Email: </strong>'.$user[0]['email'].'</p>
            <p><strong>Telefone: </strong>'.$user[0]['tel1'].'</p>
            ');

$dompdf->render();

$dompdf->stream(
	"Orçamento .pdf",
	array(
		"Attachment" => false
	)
)
?>