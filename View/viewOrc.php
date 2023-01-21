<html lang="pt-br">
<?php 
session_start();
include("../Controller/protect.php");
protect();
include("../Controller/includeuserlog.php");
include("../Model/DAO/OrcamentoDAO.php");
include("../Model/DTO/Orcamento.php");
include("../Model/DAO/ProdutoDAO.php");
include("../Model/DTO/Produto.php");
include("../Model/DAO/Orcamento_prodDAO.php");
include("../Model/DTO/Orcamento_prod.php");
$daoorc = new OrcamentoDAO();
$produto = new Orcamento;
$orc = $daoorc->carregar($_SESSION['cod_orc']);
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
  <title>Assistência Técnica</title>
</head>
<body class="custom">
  <!-- Nav -->
  <?php 
  include("navUser.php");
  ?>
  <!-- Containner 1 -->
  <br><br>
  <div class="container-fluid col-lg-10 col-sm-12 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-8 offset-2">
        <div class="bg-white h-100 shadow">
          <div class="col-10 offset-1 mb-5">
            <h1 class="text-center py-5">Detalhes:</h1>
            <?php
            $daoop = new Orcamento_prodDAO();
            $orc_p = $daoop->carregar_orc($orc[0]['cod']);
            $daoprod = new produtoDAO();
            $produto = new Produto; 
            $prod = $daoprod->carregar($orc_p[0]['cod_produto']);
            ?>
            <h5>Produto:</h5>
            <table class="table">
              <thead class="bg-primary">
                <tr>
                  <th scope="col" class="text-white">Código</th>
                  <th scope="col" class="text-white">Modelo</th>
                  <th scope="col" class="text-white">Fabricante</th>
                  <th scope="col" class="text-white">Quantidade</th>
                  <th scope="col" class="text-white">Estado</th>
                  <th scope="col" class="text-white">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?=$prod[0]['cod']?></th>
                  <td><?=$prod[0]['modelo']?></td>
                  <td><?=$prod[0]['fabricante']?></td>
                  <td><?=$orc_p[0]['qtd']?>x</td>
                  <td><?=$prod[0]['estado']?></td>
                  <td><?=$prod[0]['stts']?></td>
                </tr>
              </tbody>
            </table>
            <h5>Orçamento:</h5>
            <table class="table">
              <thead class="bg-primary">
                <tr>
                  <th scope="col" class="text-white">Código</th>
                  <th scope="col" class="text-white">Data</th>
                  <th scope="col" class="text-white">Hora</th>
                  <th scope="col" class="text-white">Status</th>
                  <th scope="col" class="text-white">Valor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?=$orc[0]['cod']?></th>
                  <td><?=$orc[0]['data']?></td>
                  <td><?=$orc[0]['hora']?></td>
                  <td><?=$orc[0]['stts']?></td>
                  <td><?=$orc[0]['valor']?></td>
                </tr>
              </tbody>
            </table>
            <div class="py-5">
              <h5>Foto do aparelho:</h5>
              <div class="col-8 offset-2">
                <img src="<?php echo('../Imagens/produtos/'.$prod[0]['foto']) ?>" style="height: 60vh; width: 100%;">
              </div>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-2 text-center">
        <div class="row">
          <div class="offset-3">
            <a href="gerarPdfOrcU.php" target="_blank" rel="noopener noreferrer"><button class="btn btn-danger">Gerar relatório PDF<i class="bi bi-filetype-pdf" style="font-size: 30px;"></i></button></a>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- WhatsApp Link -->
  <div>
    <a data-toggle="tooltip" data-placement="top" title="Estamos Online!" class="whatsapp-link" href="https://api.whatsapp.com/send?phone=558899185458&text=Olá,%20gostaria%20de%20mais%20informações!" target="_blank"><i class="fa fa-whatsapp"></i></a>
  </div>

  <!-- Footer -->
  <br><br>
  <?php 
  include("footer.php");
  ?>

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
</body>
</html>
