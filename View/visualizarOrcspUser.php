<html lang="pt-br">
<?php 
include("../Controller/protect.php");
protect_adm();
include("../Controller/includeuserlog.php");
include("../Model/DAO/OrcamentoDAO.php");
include("../Model/DTO/Orcamento.php");
include("../Model/DAO/ProdutoDAO.php");
include("../Model/DTO/Produto.php");
include("../Model/DAO/Orcamento_prodDAO.php");
include("../Model/DTO/Orcamento_prod.php");
$daous = new UsuarioDAO();
$us = $daous->carregar($_SESSION['codclientedelet']);
$dao = new OrcamentoDAO();
$totalorcs = $dao->listarTodos();
?>


<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS Custom -->
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

  <!-- JS Custom-->
  <script type="text/javascript" src="../js/custom.js"></script>

  <!-- Mask -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 
  <script type="text/javascript">
    $("#telefone, #celular").mask("(00) 0.0000-0000");
    $("#cep").mask("00000-000");
  </script>
  <!-- DataTable -->
  <link rel="stylesheet" type="text/css" href="datatable/DataTables-1.11.5/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="datatable/DataTables-1.11.5/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="datatable/DataTables-1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" language="javascript">
   $(document).ready(function() {
     $('#listarusuarios').DataTable({
      "oLanguage": {
        "sLengthMenu": "Mostrando _MENU_ registros",
        "sZeroRecords": "Nenhum registro encontrado",
        "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
        "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
        "sInfoFiltered": "(filtrado de _MAX_ registros)",
        "sSearch": "Pesquisar: ",
        "oPaginate": {
          "sFirst": "Início",
          "sPrevious": "Anterior",
          "sNext": "Próximo",
          "sLast": "Último"
        }
      }
    });
   } );
 </script>

 <title>Assistência Técnica</title>
</head>
<body class="custom">
  <!-- Nav -->
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <?php include("sidebarAdm.php"); ?>
      <div data-bs-spy="scroll" class="col py-3">
        <div class="container-fluid">
          <h1 class="mt-4">Orçamentos de <?=$us[0]['nome']?></h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Orçamentos de <?=$us[0]['nome']?></li>
          </ol>
          <div class="row">
            <table id="listarusuarios" class="display" style="width:100%">
             <thead>
              <tr>
                <th>Cod</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Status</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($totalorcs as $o) { 
                if($o['cod_cliente'] == $_SESSION['codclientedelet']){ 
                  $daoop = new Orcamento_prodDAO();
                  $orc_p = $daoop->carregar_orc($o['cod']);
                  $daoprod = new ProdutoDAO();
                  $produto = new Produto; 
                  $prod = $daoprod->carregar($orc_p[0]['cod_produto']);?> 
                  <tr>
                    <td><?=$o['cod']?></td>
                    <td><?=$o['data']?></td>
                    <td><?=$o['hora']?></td>
                    <td><?=$o['stts']?></td>
                    <td><?php $daouser = new UsuarioDAO(); $client = $daouser->carregar($_SESSION['codclientedelet']  ); echo($client[0]['nome']);?></td>
                    <td></td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#responderModal" data-bs-whatever="<?=$o['cod']?>" data-bs-whateverdata="<?=$o['data']?>" data-bs-whateverhora="<?=$o['hora']?>" data-bs-whateverstts="<?=$o['stts']?>" data-bs-whatevermodelo="<?=$prod[0]['modelo']?>" data-bs-whateversttsp="<?=$prod[0]['stts']?>" data-bs-whateverfab="<?=$prod[0]['fabricante']?>" data-bs-whateverestado="<?=$prod[0]['estado']?>" data-bs-whateverdesc="<?=$prod[0]['descricao']?>" data-bs-whatevervalor="<?=$o['valor']?>" data-bs-whateverdescricao="<?=$o['descricao']?>">Responder Orçamento</button></td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deletarModal" data-bs-whatever="<?=$orc_p[0]['cod']?>">
                      <i class="bi bi-trash3"></i>
                    </button></td>
                  </tr>
                <?php } }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modais -->

    <div class="modal fade" id="responderModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class=""  action="../Controller/AcoesOrcamento.php" method="POST">
              <input type="hidden" class="form-control" id="recipient-cod" name="cod"> 
              <div class="row">
                <div class="col-6">
                  <label for="recipient-email" class="col-form-label">Modelo:</label>
                  <input type="text" class="form-control" id="recipient-modelo" readonly="readonly">
                </div>
                <div class="col-6">
                  <label for="recipient-email" class="col-form-label">Fabricante:</label>
                  <input type="text" class="form-control" id="recipient-fab" readonly="readonly">
                </div>
              </div>
              <div class="col-12">
                <label for="recipient-email" class="col-form-label">Descrição</label>
                <textarea class="form-control" id="recipient-desc"  readonly="readonly"></textarea>
              </div>
              <div class="row">
                <div class="col-6">
                  <label for="recipient-email" class="col-form-label">Estado:</label>
                  <input type="text" class="form-control" id="recipient-estado" readonly="readonly">
                </div>
                <div class="col-6">
                  <label for="recipient-email" class="col-form-label">Status do aparelho:</label>
                  <input type="text" class="form-control" id="recipient-sttsp" readonly="readonly">
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <label for="recipient-nome" class="col-form-label">Data:</label>
                  <input type="text" class="form-control" id="recipient-data" name="data" readonly="readonly">
                </div>
                <div class="col-3">
                  <label for="recipient-email" class="col-form-label">Hora:</label>
                  <input type="text" class="form-control" id="recipient-hora" name="hora" readonly="readonly">
                </div>
                <div class="col-6">
                  <label for="recipient-email" class="col-form-label">Status:</label>
                  <input type="text" class="form-control" id="recipient-stts" readonly="readonly">
                </div>
                <div class="col-12">
                  <label for="recipient-email" class="col-form-label">Valor:</label>
                  <input type="text" class="form-control" id="recipient-valor" name="valor">
                </div>
                <div class="col-12">
                  <label for="recipient-email" class="col-form-label">Descrição:</label>
                  <textarea class="form-control" id="recipient-descricao" name="descricao"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" name="enviar" value="responderOrc">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class=""  action="../Controller/AcoesOrcamento_prod.php" method="POST">
              <input type="hidden" class="form-control" id="recipient-cod" readonly name="cod">
              <div>
                Tem certeza que deseja excluír esse orçamento permanentemente?
              </div>
              <br>
              <div class="modal-footer">    
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" name="enviar" value="DeletarpC">Deletar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
      $(function () {
        $('.dropdown-toggle').dropdown();
      }); 
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script type="text/javascript">
      var responderModal = document.getElementById('responderModal')
      responderModal.addEventListener('show.bs.modal', function (event) {
                  // Button that triggered the modal
                  var button = event.relatedTarget
                  // Extract info from data-bs-* attributes
                  var recipientcod = button.getAttribute('data-bs-whatever');
                  var recipientdata = button.getAttribute('data-bs-whateverdata');
                  var recipienthora = button.getAttribute('data-bs-whateverhora');
                  var recipientstts = button.getAttribute('data-bs-whateverstts');
                  var recipientmodelo = button.getAttribute('data-bs-whatevermodelo');
                  var recipientsttsp = button.getAttribute('data-bs-whateversttsp');
                  var recipientfab = button.getAttribute('data-bs-whateverfab');
                  var recipientestado = button.getAttribute('data-bs-whateverestado');
                  var recipientdesc = button.getAttribute('data-bs-whateverdesc');
                  var recipientvalor = button.getAttribute('data-bs-whatevervalor');
                  var recipientdescricao = button.getAttribute('data-bs-whateverdescricao');
                  // If necessary, you could initiate an AJAX request here
                  // and then do the updating in a callback.
                  //
                  // Update the modal's content.
                  var modalTitle = responderModal.querySelector('.modal-title')
                  var modal = $(this)

                  modalTitle.textContent = 'Responder orçamento: ' + recipientcod
                  modal.find('#recipient-cod').val(recipientcod)
                  modal.find('#recipient-data').val(recipientdata)
                  modal.find('#recipient-hora').val(recipienthora)
                  modal.find('#recipient-stts').val(recipientstts)
                  modal.find('#recipient-modelo').val(recipientmodelo)
                  modal.find('#recipient-sttsp').val(recipientsttsp)
                  modal.find('#recipient-fab').val(recipientfab)
                  modal.find('#recipient-estado').val(recipientestado)
                  modal.find('#recipient-valor').val(recipientvalor)
                  modal.find('#recipient-descricao').val(recipientdescricao)

                })</script>
                <script type="text/javascript">
                  var deletarModal = document.getElementById('deletarModal')
                  deletarModal.addEventListener('show.bs.modal', function (event) {
                  // Button that triggered the modal
                  var button = event.relatedTarget
                  // Extract info from data-bs-* attributes
                  var recipientcod = button.getAttribute('data-bs-whatever');

                  // If necessary, you could initiate an AJAX request here
                  // and then do the updating in a callback.
                  //
                  // Update the modal's content.
                  var modalTitle = responderModal.querySelector('.modal-title')
                  var modal = $(this)

                  modalTitle.textContent = 'Excluir orçamento: ' + recipientcod
                  modal.find('#recipient-cod').val(recipientcod) 
                })
              </script>
            </body>
            </html>
