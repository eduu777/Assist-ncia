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
$daop = new ProdutoDAO();
$produto = new Produto;
$totalprodutos = $daop->listarTodos();
krsort($totalprodutos);
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
  <div class="container-fluid col-lg-12 col-sm-12 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-7 col-sm-12">
        <div class="bg-white h-100 shadow">
          <div class="col-lg-10 offset-1 col-sm-12 mb-5">
            <h1 class="text-center py-5">Meus Orçamentos:</h1>
            <?php if (count($totalprodutos) == 0) { ?>
              <p class="text-center">Você ainda não possui orçamentos</p>
            <?php } ?>
            <?php foreach ($totalprodutos as $p){ 
              if($p['cod_usuario'] == $_SESSION['cod']){ 
                $daoop = new Orcamento_prodDAO();
                $orc_p = $daoop->carregar_prod($p['cod']);
                $daoorc = new OrcamentoDAO();
                $orcamento = new Orcamento; 
                $orc = $daoorc->carregar($orc_p[0]['cod_orcamento']);?>
                <form action="../Controller/AcoesOrcamento.php" method="POST">
                  <button id="btn_OU" type="submit" value="VisuOrc" name="enviar" style="">
                    <input type="hidden" name="cod" value="<?=$orc[0]['cod']?>">
                    <div class="mask card col-lg-10 mb-1 col-sm-12" id="card_OU" style="width: 100%;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-1">
                            <p><?=$orc_p[0]['qtd']?>x</p>
                          </div>
                          <div class="col-3">
                            <h5 class="card-title"><?=$p['modelo']?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$p['fabricante']?></h6>
                          </div>
                          <div class="col-2">
                            <h5 class="card-title">Data</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$orc[0]['data']?></h6>
                          </div>
                          <div class="col-4">
                            <h5 class="card-title">Status:</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$orc[0]['stts']?></h6>
                          </div>
                          <div class="col-2">
                            <img src="<?php echo('../Imagens/produtos/'.$p['foto']) ?>" style="width: 100%; height: 75px;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </button>
                </form>
              <?php   } 
            } 
            ?>
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
