<html lang="pt-br">
<?php 
session_start();
include("../Controller/protect.php");
tstlog();
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

  <title>Cadastre-se</title>
</head>
<body class="custom">
  <!-- Nav -->
  <?php 
  include("nav.php");
  ?>
  <!-- Containner 1 -->
  <div class="container-fluid col-10 offset-1 py-5">
    <div class="row d-flex justify-content-center">
      <div class="py-5 col-8">
        <div class="bg-white h-100">
          <div class="col-10 offset-1">
            <br><br>
            <h1 class="text-center">Cadastre-se:</h1>
            <br>
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
            <form class=""  action="../Controller/AcoesUsuario.php" method="POST">
              <div class="form-group col-12">
                <label for="exampleInputEmail1">Email<label class="text-danger">*</label></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="email" required="">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha<label class="text-danger">*</label></label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="mostrarsenha()">
                <label class="form-check-label" for="exampleCheck1">Mostrar senha</label>
              </div>
              <div class="form-group">
               <label for="exampleInputPassword1">Nome<label class="text-danger">*</label></label>
               <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome" name="nome" required="">
               <small id="emailHelp" class="form-text text-muted">Seu Nome completo.</small>
             </div>
             <div class="row">
              <div class="form-group col-lg-8 col-md-12">
               <label for="exampleInputPassword1">Rua<label class="text-danger">*</label></label>
               <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rua" name="rua" required="">
             </div>
             <div class="form-group col-2">
               <label for="exampleInputPassword1">Número<label class="text-danger">*</label></label>
               <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Número" name="num_endereco" required="">
             </div>
             <div class="form-group col-2">
               <label for="exampleInputPassword1">Complemento</label>
               <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento" name="comp">
               <small id="emailHelp" class="form-text text-muted">Ex. Apto.</small>
             </div>
           </div>
           <div class="row">
            <div class="form-group col-8">
             <label for="exampleInputPassword1">Bairro<label class="text-danger">*</label></label>
             <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bairro" name="bairro" required="">
             <small id="emailHelp" class="form-text text-muted">Seu bairro.</small>
           </div>
           <div class="form-group col-4">
             <label for="exampleInputPassword1">CEP<label class="text-danger">*</label></label>
             <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep" required="">
             <small id="emailHelp" class="form-text text-muted">Ex. 12345-678</small>
           </div>
         </div>
         <div class="row">
           <div class="form-group col-6">
             <label for="exampleInputPassword1">Ponto de referência</label>
             <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ponto de referência" name="ponto_ref">
             <small id="emailHelp" class="form-text text-muted">Ex. Vizinho a L&E Assistência</small>
           </div>
           <div class="form-group col-6">
             <label for="exampleInputPassword1">Telefone<label class="text-danger">*</label></label>
             <input type="text" class="form-control" id="celular" placeholder="Telefone" name="tel1" required="">
             <small id="emailHelp" class="form-text text-muted">Ex. (10) 1.2345-6789</small>
           </div>
         </div>
                              <!--<div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                              </div>-->
                              <br>
                              <button type="submit" class="btn btn-primary" name="enviar" value="Cadastrar">Enviar</button>
                            </form><br>
                            <div class="form-group">
                              <p>Já possui uma conta? <a href="/assistencia/index.php">Clique aqui</a></p>
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
                  
                </body>
                </html>
