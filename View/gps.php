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
            <h1 class="d-flex justify-content-center col-12">Localizar aparelho.</h1><br>
            <p class="font-italic text-muted d-flex justify-content-center">Selecione qual problema melhor se encaixa no seu.</p>
            <br>
            <div class="accordion accordion-flush shadow border" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong>Localizar aparelho perdido ou roubado</strong>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">1</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Precisa localizar aparelho perdido?.</strong><br><br>
                      Siga as instruções abaixo:<br><br>
                      Para localizar o aparelho é necessário que ele esteja com uma conta do Google (Gmail) ativa e que o aparelho esteja ligado, conectado a internet e com o GPS ligado.<br><br>
                      <strong>Para rastrear o aparelho, acesse:</strong><br><br>
                      1.<a href="https://www.google.com/android/devicemanager"></a><br><br>
                      2.Entre com sua conta do Gmail (usuário e senha)<br><br>
                      3.Clique no link de localização ( )<br><br>
                      4.Além de localizar você pode:<br><br>
                      <strong>Ring =</strong> Solicitar que o aparelho toque durante 5 minutos para facilitar a localização (em caso do perda)
                      <br><br>
                      <strong>Lock =</strong> Bloquear o aparelho remotamente.
                      <br><br>
                      <strong>Erase =</strong> Apagar todos os arquivos do aparelho remotamente.
                      <br>
                      <br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">2</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Caso eu não consiga Localizar. Há alguma outra forma de bloquear o aparelho?</strong><br><br>
                      Sim: O bloqueio mais efetivo do aparelho é através da operadora. As operadoras possuem uma lista com o registro de todos os aparelhos roubados e essa lista inutiliza o aparelho na rede, ou seja, quem está com o telefone não conseguirá fazer com que ele reconheça sinal das operadoras, não possibilitando utilizar Voz (ligações) ou Dados (acesso a internet).<br><br>
                      Para bloquear, entre em contato com sua operadora (Claro, Nextel, Oi, Tim ou Vivo) e tenha em mãos o número de IMEI do aparelho (código de série de 15 digitos). Esse código está disponível na caixa do aparelho ou na nota fiscal. Além disso, algumas operadoras também solicitam boletim de ocorrência para realizar o bloqueio.<br><br>
                    </div>
                    <hr style="height:1px; width:100%; border-width:0; color:red; background-color:blue">
                    <div class="col-2 rounded-circle bg-primary text-center text-white" style="height: 32px; width: 32px;">
                      <h4 class="text-center">3</h4>
                    </div>
                    <div class="accordion-body col-10 offset-1">
                      <strong>Se você estiver usando segurança, certifique-se de que sua senha / chave de acesso no roteador e no dispositivo são idênticas.</strong><br><br>
                      Se você não lembrar sua senha, consulte o guia ""Não consigo lembrar minha senha"".<br><br>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong>Bloquear celular roubado</strong>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                 <div class="accordion-body">
                  <div class="col-2 rounded-circle bg-primary text-white" style="height: 32px; width: 32px;">
                    <h4 class="text-center">1</h4>
                  </div>
                  <div class="accordion-body col-10 offset-1">
                    <strong>Foi vítima de roubo e deseja bloquear o aparelho?</strong><br><br>Siga as instruções abaixo:<br><br>
                    O bloqueio mais efetivo do aparelho é através da operadora. As operadoras possuem uma lista com o registro de todos os aparelhos roubados e essa lista inutiliza o aparelho na rede, ou seja, quem está com o telefone não conseguirá fazer com que ele reconheça sinal das operadoras, não possibilitando utilizar Voz (ligações) ou Dados (acesso a internet).<br><br>
                    Para bloquear, entre em contato com sua operadora (Claro, Nextel, Oi, Tim ou Vivo) e tenha em mãos o número de IMEI do aparelho (código de série de 15 digitos). Esse código está disponível na caixa do aparelho ou na nota fiscal. Além disso, algumas operadoras também solicitam boletim de ocorrência para realizar o bloqueio.
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
