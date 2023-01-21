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
              <h1 class="d-flex justify-content-center col-12">Bateria / não liga.</h1><br>
              <p class="font-italic text-muted d-flex justify-content-center">Selecione qual problema melhor se encaixa no seu.</p>
              <br>
              <div class="accordion accordion-flush shadow border" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <strong>Meu aparelho não liga</strong>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                        <h4 class="text-center">1</h4>
                      </div>
                      <div class="accordion-body col-10 offset-1">
                        <strong>Conecte o aparelho no carregador. A tela ou a luz de notificações acendeu?</strong><br><br>
                        <strong>Sim:</strong> Aguarde o aparelho recarregar. Ele levará pelo menos 30 minutos para atingir carga mínima antes de ligar.<br>
                        Isso pode ter ocorrido devido algum travamento de aplicativo no momento que o aparelho estava com pouca carga. Fique tranquilo pois isso pode ocorrer, mas com frequência mínima.<br><br>
                        <strong>Não: </strong>Vá para o próximo passo.
                        <br>
                        <br>
                      </div>
                      <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                      <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                        <h4 class="text-center">2</h4>
                      </div>
                      <div class="accordion-body col-10 offset-1">
                        <strong>Ainda conectado ao carregador, segure o botão ligar e o botão de volume para baixo durante 2 minutos e depois solte.</strong><br><br>
                        <strong>Apareceu um menu em inglês?</strong><br><br>
                        <strong>Sim:</strong><br><br> 
                        <strong>Android 5.0 ou inferior:</strong> Quando aparecer as opções em inglês selecione a opção "NORMAL POWERUP" com o botão de volume para baixo e use o botão de volume para cima para religar o aparelho.<br><br>
                        <strong>Android 5.1 ou superior:</strong> Quando aparecer as opções em inglês selecione a opção "START" com o botão de volume para baixo e use o botão de ligar para religar o aparelho.<br><br>
                        <strong>Não: </strong>Infelizmente não conseguirá resolver sozinho. Realize o Login e realize um orçamento.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      <strong>Meu Aparelho Não Carrega</strong>
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                   <div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Você está usando o carregador original do aparelho? Ou pelo USB?</strong><br><br>
                      <strong>Carregador Original</strong> Siga para o passo 2.<br><br>
                      <strong>A tela ou a luz de notificações acendeu?</strong><br><br>
                      <strong>USB:</strong> A potência do carregamento via USB varia de acordo com o equipamento ao qual o cabo está conectado. Se a potência for muita baixa pode ser insuficiente para começar uma carga se a bateria estiver completamente zerada. Tente o carregador de parede original que deverá resolver.
                      <br>
                      <br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Conecte o aparelho no carregador. Em seguida segure o botão LIGA por 2 minutos ininterruptamente</strong><br>
                      A tela ou a luz de notificações acendeu?<br><br>
                      <strong>Sim:</strong> Aguarde o aparelho recarregar. Ele levará pelo menos 30 minutos para atingir carga mínima antes de ligar.<br>
                      Isso pode ter ocorrido devido algum travamento de aplicativo no momento que o aparelho estava com pouca carga. Fique tranquilo pois isso pode ocorrer, mas com frequência mínima.<br><br>
                      <strong>Não:</strong>Vá para o próximo passo.
                      <br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Ainda conectado ao carregador, segure o botão ligar e o botão de volume para baixo durante 3 segundos e depois solte.</strong><br>
                      Apareceu um menu em inglês?<br><br>
                      <strong>Sim:</strong><br><br> 
                      <strong>Android 5.0 ou inferior:</strong> Quando aparecer as opções em inglês selecione a opção "NORMAL POWERUP" com o botão de volume para baixo e use o botão de volume para cima para religar o aparelho.<br><br>
                      <strong>Android 5.1 ou superior:</strong> Quando aparecer as opções em inglês selecione a opção "START" com o botão de volume para baixo e use o botão de ligar para religar o aparelho.<br><br>
                      <strong>Não: </strong>Infelizmente não conseguirá resolver sozinho. Realize o Login e realize um orçamento.<br><br>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <strong>Carregar a Bateria</strong>
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Qual é o tempo da primeira recarga?</strong><br><br>A primeira recarga é exatamente igual as demais e não precisa de nenhum tempo especial. Conecte o aparelho ao carregador e aguarde até que o aparelho mostre a indicação de 100% de bateria ou carga completa.<br>O tempo de carga varia de acordo com o tipo de carregador e a capacidade da bateria. Pode variar de 1:30 à 4 horas.
                      <br>
                      <br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Posso recarregar meu aparelho antes dele estar com carga baixa?</strong><br>
                      Sim, os aparelhos/ baterias modernas permitem a carga a qualquer momento sem que ocorra qualquer dano. Vai sair de casa e precisa de mais bateria? Carregue a bateria sem problemas, mesmo que ela não esteja completamente descarregada ou você não terá tempo de carregá-la até 100%.<br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Minha bateria vicia?</strong><br>Não, faz muito tempo que a tecnologia empregada nas baterias avançou e não tem mais problemas de vício. As baterias modernas permitem carga a qualquer momento sem qualquer dano ou risco de vício. Elas foram projetadas para ter uma duração compatível com o ciclo de vida de um smartphone, ou seja, vão durar pelo menos de 18 a 24 meses.<br><br>
                    </div>
                  </div></div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    <strong>Aquecimento</strong>
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Enquanto carrega:</strong><br><br>É normal o aparelho aquecer enquanto a bateria é recarregada, pois o produto está recebendo energia. Fique tranquilo quanto ao aquecimento, pois a Motorola garante a segurança dos produtos através de um rígido controle de qualidade.
                      <br>
                      <br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Enquanto utiliza:</strong><br>
                      É normal o aparelho aquecer nestas circunstâncias. O aparelho possui um processador parecido com de notebooks assim as funções que exigem maior processamento farão o produto aquecer (assim como os notebooks também aquecem)..<br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Standby (sem utilizar):</strong><br>O produto pode aquecer devido alguma ação que está exigindo processamento em segundo plano, como por exemplo: sincronismo de e-mail, aplicativos não encerrados e etc.<br>Esta característica é normal porém para minimizar, sugerimos que desligue o aparelho uma vez ao dia para que ele inicie sem aplicações rodando em segundo plano.<br><br>
                    </div>
                  </div></div>
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
