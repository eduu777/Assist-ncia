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
            <h1 class="d-flex justify-content-center col-12">Aparelho lento.</h1><br>
            <p class="font-italic text-muted d-flex justify-content-center">Selecione qual problema melhor se encaixa no seu.</p>
            <br>
            <div class="accordion accordion-flush shadow border" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong>Aparelho Está Lento/ Travando / Resposta Atrasada</strong>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Lentidão ou travamento estão geralmente ligados a grande uso de memória (RAM)</strong><br><br>
                      O Android já tem uma inteligência para encerrar aplicativos que não estão sendo usados quando algum novo aplicativo precisa de memória RAM para funcionar. Por outro lado, há aplicativos que exigem alto uso de memória e estão rodando o tempo todo. Um bom exemplo são aplicativos de Anti-virus. Eles em geral, rodam o tempo todo e usam muita memória.<br>
                      Isso pode ter ocorrido devido algum travamento de aplicativo no momento que o aparelho estava com pouca carga. Fique tranquilo pois isso pode ocorrer, mas com frequência mínima.
                      <br><br>
                      Tente remover aplicativos com esse comportamento e certamente a performance vai melhorar.
                      <br><br>
                      Para remover clique em:
                      <br><br>
                      Menu >> Configurar >> Aplicativos >> encontre o aplicativo >> Desinstalar
                      <br><br>
                      Ou Deslize para cima>>Configurar >> Aplicativos >> encontre o aplicativo >> Desinstalar
                      <br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Aplicativos rodando em segundo plano</strong><br><br>
                      Para fechar os aplicativos em segundo plano siga os seguintes passos:<br><br> 
                      Menu >> Configurar >> Aplicativos >> mova uma vez da direita para a esquerda até localizar Em Execução >> encontre o aplicativo >> Parar
                      <br><br>
                      Não pare aplicativos com o logo do Android (bonequinho verde), pois são processos do sistema operacional.
                      <br><br>
                      Alguns aplicativos podem voltar a funcionar automaticamente, mesmo após a tentativa de pará-los. Se não utiliza o aplicativo com frequência, desinstale a procure outra opção na Play Store.
                      <br><br>
                      <strong>Dica: </strong>Pra quem não tem tempo de realizar esse procedimento sempre, desligue e religue o aparelho uma vez ao dia. É um ótimo jeito de fechar os aplicativos e melhorar a performance.
                      <br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>O travamento ocorre em algum aplicativo específico?</strong><br><br>
                      <strong>Sim:</strong> Quase todos os aplicativos são desenvolvidos por terceiros. Apesar de estarem na Play Store (loja de aplicativos da Google), eles não necessariamente tem a melhor performance possível ou foram desenvolvidos para seu modelo de aparelho ou versão do Android.
                      <br><br>
                      Se o travamento ocorre em algum aplicativo específico, sugerimos que tente limpar os dados do aplicativo:
                      <br><br>
                      Acesse Menu >> Configurar >> Aplicativos >> mova duas vezes da direita para a esquerda até localizar Todos >> encontre o aplicativo >> Clique em Limpar dados
                      <br><br>
                      Se ainda assim continuar travando, desinstale o aplicativo e procure outro similar.
                      <br><br>
                      Sempre leve em consideração a avaliação de outros usuários. É o melhor indicativo que o aplicativo tem um bom funcionamento.
                      <br><br>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong>Meu aparelho está com a tela travada</strong>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">
                  <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">1</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Tente desligar e religar o aparelho.</strong><br><br>
                    <strong class="text-danger">Resolveu?</strong><br><br>
                    <strong>Sim: </strong>Algum aplicativo pode ter ocasionado o erro. Se isso ocorrer com frequência, observe se está associado ao uso de algum aplicativo ou funcionalidade específica.<br><br>
                    <strong>Não: </strong>Vá para o passo seguinte.<br><br>
                    Tente remover aplicativos com esse comportamento e certamente a performance vai melhorar.
                    <br><br>
                    Para remover clique em:
                    <br><br>
                    Menu >> Configurar >> Aplicativos >> encontre o aplicativo >> Desinstalar
                    <br><br>
                    Ou Deslize para cima>>Configurar >> Aplicativos >> encontre o aplicativo >> Desinstalar
                  </div>
                  <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                  <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">2</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>O aparelho não desliga?</strong><br><br>
                    <strong>Vamos tentar um "boot" (reinicialização do aparelho).</strong><br><br>
                    <strong>Pressione a tecla LIGA durante 30 segundos até o aparelho desligar, depois tente religá-lo. (Esse processo não apagará nada no aparelho)</strong><br><br>
                    <strong class="text-danger">O aparelho ligou normalmente?</strong>
                    <br><br>
                  </div>
                </div>
              </div> 
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <strong>Dicas para melhorar a performance do aparelho</strong>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><div class="accordion-body">
                  <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">1</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Dicas para Aumentar a duração da Bateria</strong><br><br>A duração de bateria dos aparelhos varia de acordo com a utilização. Tempo em que a tela está ligada (utilizando internet, vídeos ou jogos) e aplicativos que exigem alto processamento (anti-virus, jogos e outros) podem ser grandes vilões de uma boa duração de bateria.
                    <br><br>
                    Mas você não quer deixar de usar o máximo de seu smartphone, certo? Então seguem algumas dicas que otimizam a duração da bateria:
                    <br><br>
                    <strong>Internet:</strong> Menu ou deslize para cima > configurar > Uso de dados > dados movéis > Não<br><br>
                    <strong>Brilho:</strong> Menu ou deslize para cima > configurar > tela > Brilho ou Nível de Brilho > selecione um brilho um intermediário<br><br>
                    <strong>Wi-fi:</strong> Menu ou deslize para cima > configurar > wi-fi > Sim ou não<br><br>
                    <strong>GPS:</strong> Menu ou deslize para cima > configurar > Localização > Sim ou não<br><br>
                    <strong>Diminuir tempo de Tela:</strong> Menu ou deslize para cima > configurar > tela > modo de espera ou modo ocioso> selecione entre 15 e 30 segundos<br><br>
                    <strong>Feche aplicativos em segundo plano:</strong> Vá ao ítem 4 para mais detalhes<br><br>
                    Não utilizar a internet, Wi-fi ou GPS e ainda mantê-los ligados, força o aparelho a continuar buscando redes e sinais, o que aumenta o consumo de bateria.<br><br>
                    Reduzir o brilho e o tempo de tela vai ajudar muito na bateria.
                    <br><br>
                  </div>
                  <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                  <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">2</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Uso de memória RAM</strong><br>
                    O Android já tem uma inteligência para encerrar aplicativos que não estão sendo usados quando algum novo aplicativo precise de memória RAM para funcionar. Por outro lado, há aplicativos que exigem alto uso de memória e estão rodando o tempo todo. Um bom exemplo são aplicativos de Anti-virus. Eles em geral, rodam o tempo todo e usam muita memória.<br><br>
                    <strong>Dica:</strong> Tente remover aplicativos com esse comportamento e certamente a performance vai melhorar.<br><br>
                    Para remover clique em:<br><br>
                    Menu > Configurar > Aplicativos > encontre o aplicativo > toque em Desinstalar.<br><br>
                    Ou Deslize para cima> Configurar > Aplicativos > encontre o aplicativo > toque em Desinstalar.
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
