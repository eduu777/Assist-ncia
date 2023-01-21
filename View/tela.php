<html lang="pt-br">
<?php  
session_start();
include("../Controller/includeuserlog.php")
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
  if (isset($_SESSION['usuario'])) {
  include("navuser.php");
} else{
include("nav.php");
}
?>

<!-- Containner 1 -->
<div class="container-fluid ">
  <div class="row">
   <!--LINHA 1-->  
   <div class="container">
    <div class="row">
      <div class="col-lg-12 col-ms-12 col-md-12">
       <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="d-flex justify-content-center py-5">
          <div class="col-10 py-5" >
            <h1 class="d-flex justify-content-center col-12">Tela.</h1><br>
            <p class="font-italic text-muted d-flex justify-content-center">Selecione qual problema melhor se encaixa no seu.</p>
            <br>
            <div class="accordion accordion-flush shadow border" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong>Tela travada / Escura</strong>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Tente desligar e religar o aparelho.</strong><br><br>
                      <strong class="text-danger">Resolveu?</strong><br><br>
                      <strong>Sim:</strong> Algum aplicativo pode ter ocasionado o erro. Se isso ocorrer com frequência, observe se está associado ao uso de algum aplicativo ou funcionalidade específica.<br><br>
                      <strong>Não: </strong>Vá para o passo seguinte.
                      <br>
                      <br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Tente ajustar o brilho (mesmo com a tela Apagada).</strong><br><br>
                      Ligue o aparelho >> deixe a tela ficar escura >> Pressione e solte a tecla LIGA >> na parte superior da tela, arraste para baixo (como se fosse ver uma notificação >> a um dedo de distância do topo da tela, arraste da esquerda para a direita e veja se a tela liga.<br><br>
                      <strong class="text-danger">Tela acendeu?</strong><br><br>
                      <strong>Sim:</strong> Possivelmente a função de brilho adaptável estava ativado e a tela com o brilho mínimo. Acesse Menu ou deslize para cima >> Configurar >> Tela >> desative o brilho adaptável<br><br> 
                      <strong>Não: </strong>Vá para o Passo 3.
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Vamos tentar um "boot" (reinicialização do aparelho).</strong><br><br>
                      Pressione a tecla LIGA durante 30 segundos. (Esse processo não apagará nada no aparelho)<br><br>
                      <strong class="text-danger">O aparelho ligou normalmente?</strong><br><br>
                      <strong>Sim:</strong> Algum aplicativo pode ter ocasionado o erro. Se isso ocorrer com frequência, observe se está associado ao uso de algum aplicativo ou funcionalidade específica.<br><br> 
                      <strong>Não: </strong>Solicite um orçamento ou visite nossa loja.
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong>Display / Tela quebrada</strong>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">
                  <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">1</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Como faço para trocar a tela quebrada?</strong><br><br>
                    Você poderá direcionar o aparelho para a L&E assistência técnica para que seja feito orçamento. O valor da peça é padrão, mas o valor total do orçamento varia de acordo com a mão de obra cobrada, então vale uma pesquisa.<br><br>
                    O valor do display varia de acordo com o modelo, materia e tamanho do display. Nos novos aparelhos as telas estão cada vez maiores e com resolução melhor (HD), então o valor é relativamente alto em comparação a outros componentes do aparelho.
                    <br>
                    <br>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row d-flex justify-content-center py-5">
            <p class="d-flex justify-content-center">Não conseguiu resolver seu problema?</p>
            <div class="d-flex justify-content-center text-white">
              <?php 
              if (isset($_SESSION['usuario'])) {
              echo("<a href='solicitarOrc.php' class='btn btn-primary btn-md' role='button' aria-pressed='true'>Solicite um orçamento</a>");
            } else{
            echo("<a href='login.php' class='btn btn-primary btn-md' role='button' aria-pressed='true'>Solicite um orçamento</a>");
          }
          ?>
        </div>
      </div>
    </div>
  </div> 
</div>
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
