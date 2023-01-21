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
            <h1 class="d-flex justify-content-center col-12">Sim card não funciona.</h1><br>
            <p class="font-italic text-muted d-flex justify-content-center">Selecione qual problema melhor se encaixa no seu.</p>
            <br>
            <div class="accordion accordion-flush shadow border" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong>Aparelho não reconhece Sim Card</strong>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Verificar o tamanho do sim card.</strong><br><br>
                      Os aparelhos novos tem diferentes tamanhos de sim card. Consulte o manual do seu aparelho para confirmar qual o tamanho correto de cartão sim.<br>
                      <img class="text-center" src="../Imagens/loja/sims.png"><br>
                      Você está usando o tamanho correto?<br><br>
                      <strong>Sim: </strong>Vá para o passo 2.<br><br>
                      <strong>Não: </strong>Vá até uma loja da operadora para trocar o seu sim card pelo tamanho correto. A troca em geral ocorre na hora.
                      <br>
                      <br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Há uma configuração para habilitar ou desabilitar o sim card.</strong><br><br>
                      Acesse Menu >> Configurar >> Rede e Internet >> Cartões Sim >> Certifique-se que o sim card ao qual seu aparelho está inserido está ativo<br><br>
                      Consegui ativar o sim card?<br><br>
                      <strong>Sim:</strong> Ótimo. O aparelho deverá reconhecer sinal a partir de agora.<br><br>
                      <strong>Não: </strong>Vá para o passo 3.
                      <br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Você está usando sim card cortado?</strong><br><br>
                      As vezes sim cards mal cortados podem não funcionar adequadamente e não serem reconhecidos no aparelho. Não recomendamos a utilização de sim cards fora do padrão informado no passo 1. Além disso, o sim card mal cortado pode travar na gaveta de SIM do aparelho e danificá-la.<br><br>
                      Você está usando um sim card cortado?<br><br>
                      <strong>Sim:</strong> Vá até uma loja da operadora para trocar o seu sim card pelo tamanho correto. A troca em geral ocorre na hora.<br><br>
                      <strong>Não: </strong>Tente outro sim card do mesmo tamanho e veja se funciona. Se ainda assim não reconhecer, infelizmente seu aparelho precisará ser analisado em uma assistência técnica. Acesse a lista de assistências no link abaixo..
                      <br><br>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong>Tamanhos de Sim Card</strong>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">
                  <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">1</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Existem 3 diferentes tamanhos de SIM card</strong><br><br>
                    Os aparelhos novos tem diferentes tamanhos de sim card.<br><br>
                    Consulte o manual do seu aparelho para confirmar qual o tamanho correto de cartão sim.<br><br>
                    <img class="text-center" src="../Imagens/loja/sims.png"><br>
                    Note que além do tamanho pode haver diferença na espessura do sim card. Isso pode fazer com que sim cards cortados não encaixem corretamente e até mesmo fiquem travados no aparelho, danificando o conector.<br><br>
                    Recomendamos sempre a utilização de SIM cards no tamanho adequado para cada aparelho.
                    <br>
                    <br>
                  </div>
                </div>
              </div> 
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <strong>Uso de Sim Card cortado</strong>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><div class="accordion-body">
                  <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">1</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Você trocou de smartphone e agora seu cartão sim não é do tamanho do novo aparelho?</strong><br><br>
                    Não se preocupe. Vá até uma loja de sua operadora e solicite a troca do cartão SIM. Eles migrarão sua linha para o novo cartão SIM e em minutos você já poderá utilizá-lo.<br><br>
                    Sabemos da prática de cortar o SIM Card. Muitas vezes o sim card cortado funciona, porém se o corte não for exato, poderá atingir os conectores do cartão sim e inutilizá-lo. Se isso ocorrer, aquele cartão não será mais reconhecido em nenhum aparelho.<br><br>
                    Além disso, um cartão mal cortado ou com espessura diferente poderá ficar preso a gaveta de sim card do aparelho e danificá-la (na tentativa de remoção). Nesse caso o aparelho não terá garantia para esse ítem e o reparo será cobrado.
                    <br>
                    <br>
                  </div>
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
