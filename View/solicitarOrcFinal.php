<html lang="en">
<?php 
session_start();
include("../Controller/protect.php");
protect();
include("../Controller/includeuserlog.php");
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
  <div class="container-fluid col-10 offset-1 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-7">
        <div class="bg-white h-100">
          <div class="col-10 offset-1">
            <br><br>
            <h1 class="display-4 text-center"><strong>Sucesso!</strong></h1>
            <div class="col-5 offset-4">
              <img src="../Imagens/loja/gifloading.gif" style="width: 76%">
            </div>
            <div class="col-12 text-center mb-4">
              <h6 class="display-6">Seu pedido de orçamento foi enviado, aguarde! Responderemos o mais rápido possível</h6>
            </div>
            <div class="py-3 text-center">
              <a href="orcUser.php"><button class="btn btn-dark">Visualizar meus orçamentos</button></a>
            </div>
            <br>
            <br>
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
