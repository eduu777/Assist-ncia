<html lang="pt-br">
<?php 
include("../Controller/protect.php");
protect_adm();
include("../Controller/includeuserlog.php");
$dao = new UsuarioDAO();
$usuario = new Usuario();
$totalusers = $dao->listarTodos($usuario);
include("../Model/DAO/OrcamentoDAO.php");
include("../Model/DTO/Orcamento.php");
include("../Model/DAO/ProdutoDAO.php");
include("../Model/DTO/Produto.php");
include("../Model/DAO/Orcamento_prodDAO.php");
include("../Model/DTO/Orcamento_prod.php");
?>

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
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script type="text/javascript" language="javascript">
   $(document).ready(function() {
     $('#listarusuarios').DataTable({
      dom: 'Bfrtip',
        buttons: [
            {
               extend : 'pdfHtml5',
               text: '<i class="bi bi-filetype-pdf" style="font-size: 20px;">',
               titleAttr: 'Exportar PDF',
               className: 'btn btn-danger'

            }
        ],
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
          <h1 class="mt-4">Usuários</h1>
           <?php if (isset($_SESSION['errocad'])) {?>
              <div class="alert alert-danger text-center" role="alert">
               Erro ao cadastrar!
             </div>
             <?php  
             unset($_SESSION['errocad']);
           }
           ?>
           <?php if (isset($_SESSION['emailemuso'])) {?>
              <div class="alert alert-danger text-center" role="alert">
               Email já cadastrado !
             </div>
             <?php  
             unset($_SESSION['emailemuso']);
           }
           ?>
          <ol class="breadcrumb mb-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Adicionar Usuário
            <i class="bi bi-plus-circle"></i>
          </button>  
          </ol>
          <div class="row">
            <table id="listarusuarios" class="display" style="width:100%">
             <thead>
              <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Acesso</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($totalusers as $u) : ?>
                <tr>
                  <td><?=$u['cod']?></td>
                  <td><?=$u['nome']?></td>
                  <td><?=$u['email']?></td>
                  <td><?=$u['acesso']?></td>
                  <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="<?=$u['cod']?>" data-bs-whatevernome="<?=$u['nome']?>" data-bs-whateveremail="<?=$u['email']?>" data-bs-whateveracesso="<?=$u['acesso']?>" data-bs-whateversenha="<?=$u['senha']?>" data-bs-whateverfoto="<?=$u['foto']?>" data-bs-whateverrua="<?=$u['rua']?>" data-bs-whatevertel="<?=$u['tel1']?>" data-bs-whatevernum="<?=$u['numero']?>" data-bs-whatevercomp="<?=$u['comp']?>" data-bs-whateverbairro="<?=$u['bairro']?>" data-bs-whateverponto="<?=$u['ponto_ref']?>"><i class="bi bi-pencil-square"></button></td>
                    <?php 
                    $daoorc = new OrcamentoDAO();
                    $totalorcs = $daoorc->carregar_cliente($u['cod']);
                    if(count($totalorcs) == 0){
                      ?>
                      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deletarModal" data-bs-whatever="<?=$u['cod']?>">
                        <i class="bi bi-trash3"></i>
                      </button></td>
                    <?php }else{?>
                      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deletarErroModal" data-bs-whatever="<?=$u['cod']?>">
                        <i class="bi bi-trash3"></i>
                      </button></td>
                    <?php } ?> 
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modais -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class=""  action="../Controller/AcoesUsuario.php" method="POST">
            <input type="hidden" class="form-control" id="recipient-cod" readonly name="cod"> 
            <div class="col-12">
              <label for="recipient-nome" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" id="recipient-name" name="nome">
            </div>
            <div class="col-12">
              <label for="recipient-email" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-email" name="email">
            </div>
            <div class="col-12">
              <label for="recipient-email" class="col-form-label">Rua:</label>
              <input type="text" class="form-control" id="recipient-rua" name="foto">
            </div>
            <div class="row">
              <div class="col-2">
                <label for="recipient-email" class="col-form-label">Número:</label>
                <input type="text" class="form-control" id="recipient-num" name="num_endereco">
              </div>
              <div class="col-4">
                <label for="recipient-email" class="col-form-label">Comp.:</label>
                <input type="text" class="form-control" id="recipient-comp" name="comp">
              </div>
              <div class="col-6">
                <label for="recipient-email" class="col-form-label">Bairro:</label>
                <input type="text" class="form-control" id="recipient-bairro" name="bairro">
              </div>
           </div>
           <div class="col-12">
                <label for="recipient-email" class="col-form-label">Ponto Ref.:</label>
                <input type="text" class="form-control" id="recipient-ponto" name="ponto_ref">
              </div>
            <div class="col-12">
              <label for="recipient-email" class="col-form-label">Foto:</label>
              <input type="text" class="form-control" id="recipient-foto" name="foto" readonly="readonly">
            </div>
            <div class="row">
              <div class="col-6">
                <label for="recipient-email" class="col-form-label">Telefone:</label>
                <input type="text" class="form-control" id="recipient-tel" name="foto">
              </div>
              <div class="col-6">
                <label for="recipient-acesso" class="col-form-label">Acesso:</label>
                <select class="form-select" aria-label="Default select example" id="recipient-acesso" name="acesso">
                  <option value="adm">adm</option>
                  <option value="cliente">cliente</option>
                </select>
              </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="enviar" value="Editar">Enviar</button>
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
          <form class=""  action="../Controller/AcoesUsuario.php" method="POST">
            <input type="hidden" class="form-control" id="recipient-cod" readonly name="cod">
            <div>
              Tem certeza que deseja excluír esse usuário permanentemente?
            </div>
            <br>
            <div class="modal-footer">    
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" name="enviar" value="Deletar">Deletar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deletarErroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <form action="../Controller/AcoesUsuario.php" method="POST">
              <input type="hidden" class="form-control" id="recipient-cod" readonly name="cod">
              <p>O usuário possui orçamentos em seu nome, delete-os para apagar o usuário</p>
            </div>
            <br>
            <div class="modal-footer">    
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" name="enviar" value="erroDeletar">Visualizar orçamentos</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar usuário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form class=""  action="../Controller/AcoesUsuario.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email"  name="email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nome</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome" name="nome">
          </div>
          <div class="row">
           <div class="form-group col-lg-8 col-md-12">
            <label for="exampleInputPassword1">Rua</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rua" name="rua">
          </div>
          <div class="form-group col-2">
            <label for="exampleInputPassword1">Número</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Número" name="num_endereco">
          </div>
          <div class="form-group col-2">
            <label for="exampleInputPassword1">Comp</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento" name="comp">
          </div>
        </div>
        <div class="row">
         <div class="form-group col-8">
          <label for="exampleInputPassword1">Bairro</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bairro" name="bairro">
        </div>
        <div class="form-group col-4">
          <label for="exampleInputPassword1">CEP</label>
          <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="exampleInputPassword1">Ponto de referência</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ponto de referência" name="ponto_ref">
        </div>
        <div class="form-group col-6">
          <label for="exampleInputPassword1">Telefone</label>
          <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="tel1">
        </div>
      </div>
                              <!--<div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                              </div>-->
                              <br>
                              <div class="modal-footer">    
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" name="enviar" value="Cadastrar">Enviar</button>
                              </div>
                            </form>
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
                        document.getElementById('item5').style.color = 'white';
                      </script>
                    </body>
                    </html>
