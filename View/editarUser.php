<html lang="pt-br">
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
  <div class="container-fluid col-lg-12 col-sm-12 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 col-sm-12">
        <div class="bg-white h-100 shadow">
          <div class="col-lg-10 offset-1 col-sm-12 mb-5">
            <h1 class="text-center py-5">Meu Perfil:</h1>
            <?php if (isset($_SESSION['erroaltsenha'])) {?>
              <div class="alert alert-danger text-center" role="alert">
               Senha antiga está errada!
             </div>
             <?php  
             unset($_SESSION['erroaltsenha']);
           }
           ?> 
           <div class="row">
            <div class="col-6 border-right">
              <?php if (isset($_SESSION['erroftUser'])) {?>
                <div class="alert alert-danger text-center" role="alert">
                 O formato do arquivo é incompatível!
               </div>
               <?php  
               unset($_SESSION['erroftUser']);
             }
             if (isset($_SESSION['semfoto'])) {?>
                <div class="alert alert-danger text-center" role="alert">
                 Nenhuma foto adicionada!
               </div>
               <?php  
               unset($_SESSION['semfoto']);
             }
             ?>
             <form action="../Controller/AcoesUsuario.php" method="POST" enctype="multipart/form-data">
              <div class="p-3 py-5 d-flex flex-column align-items-center text-center">
                <div class="col-6 position-relative">
                  <img src="<?php echo('../Imagens/usuarios/'.$userlog[0]['foto']) ?>" width="170" height="170" class="rounded-circle border shadow mb-3" name="foto_user">
                  <button class="bg-primary btn profile-button text-white rounded-circle" style="height: 40px; border: none; position: absolute; right: 10%;" onclick="acionarInput()" type="button"><i class="bi bi-camera" style="font-size: 18px"></i></i></button>
                  <input class="py-3" type="file" name="foto" onchange="previewImg()" id="inp_file" style="display: none;">
                </div>
                <h5><?=$userlog[0]['nome']?></h5>
                <span class="text-black-50"><?=$userlog[0]['email']?></span>
                <br>
                <button class="btn btn-primary profile-button" type="submit" name="enviar" value="altFoto">Salvar foto <i class="bi bi-pencil-square"></i></button>
              </div>
            </div>
          </form>
          <div class="col-5 border-right">
            <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Dados pessoais</h4>
                <button class="btn-lg btn-primary profile-button" type="button" data-bs-toggle="modal" data-bs-target="#editADM" style="border-radius: 40px; border: none;"><i class="bi bi-pencil-square"></i></button>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <label class="labels">Rua</label>
                  <input type="text" class="form-control" placeholder="Rua" value="<?=$userlog[0]['rua']?>" disabled>
                </div>
                <div class="col-md-4">
                  <label class="labels">Número</label>
                  <input type="text" class="form-control" value="<?=$userlog[0]['numero']?>" placeholder="Número" disabled>
                </div>
                <div class="col-md-8">
                  <label class="labels">Complemento</label>
                  <input type="text" class="form-control" value="<?=$userlog[0]['comp']?>" placeholder="Complemento" disabled>
                </div>
                <div class="col-md-12">
                  <label class="labels">Ponto de Referência</label>
                  <input type="text" class="form-control" value="<?=$userlog[0]['ponto_ref']?>" placeholder="Ponto de referência" disabled>
                </div>
                <div class="col-md-6">
                  <label class="labels">CEP</label>
                  <input type="text" class="form-control" placeholder="CEP" value="<?=$userlog[0]['cep']?>" disabled>
                </div>
                <div class="col-md-6">
                  <label class="labels">Bairro</label>
                  <input type="text" class="form-control" value="<?=$userlog[0]['bairro']?>" placeholder="Bairro" disabled>
                </div>
                <div class="col-md-12">
                  <label class="labels">Telefone</label>
                  <input type="text" class="form-control" value="<?=$userlog[0]['tel1']?>" placeholder="Telefone" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="py-4 col-10 offset-1">
              <h1 class="py-3 text-center">Alterar senha:</h1> 
              <form action="../Controller/AcoesUsuario.php" method="POST">
                <div class="form-group col-6 offset-3">
                  <label for="exampleInputPassword1">Senha antiga<label class="text-danger">*</label></label>
                  <input type="password" class="form-control" id="senha" placeholder="Senha" name="senhaantiga" required>
                </div>
                <div class="form-group col-6 offset-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="mostrarsenha()">
                  <label class="form-check-label" for="exampleCheck1">Mostrar senha</label>
                </div>
                <div class="form-group col-6 offset-3">
                  <label for="exampleInputPassword1">Senha nova<label class="text-danger">*</label></label>
                  <input type="password" class="form-control" id="senha2" placeholder="Senha" name="senha" required>
                </div>
                <div class="form-group col-6 offset-3">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="mostrarsenha2()">
                  <label class="form-check-label" for="exampleCheck1">Mostrar senha</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary col-6 offset-3" name="enviar" value="editarSenha">Enviar</button>
              </form>
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
<br><br>
<?php 
include("footer.php");
?>

<!-- MODAIS --> 
<div class="modal fade" id="editADM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class=""  action="../Controller/AcoesUsuario.php" method="POST">
          <input type="hidden" class="form-control" value="<?=$userlog[0]['cod']?>" readonly name="cod"> 
          <input type="hidden" class="form-control" value="<?=$userlog[0]['acesso']?>" readonly name="acesso"> 
          <div class="row mt-3">
            <div class="col-md-12">
              <label class="labels">Nome</label>
              <input type="text" class="form-control" placeholder="Rua" value="<?=$userlog[0]['nome']?>" name="nome">
            </div>
            <div class="col-md-12">
              <label class="labels">Email</label>
              <input type="text" class="form-control" placeholder="Rua" value="<?=$userlog[0]['email']?>" name="email">
            </div>
            <div class="col-md-12">
              <label class="labels">Rua</label>
              <input type="text" class="form-control" placeholder="Rua" value="<?=$userlog[0]['rua']?>" name="rua">
            </div>
            <div class="col-md-4">
              <label class="labels">Número</label>
              <input type="text" class="form-control" value="<?=$userlog[0]['numero']?>" placeholder="Número" name="num_endereco">
            </div>
            <div class="col-md-8">
              <label class="labels">Complemento</label>
              <input type="text" class="form-control" value="<?=$userlog[0]['comp']?>" placeholder="Complemento" name="comp">
            </div>
            <div class="col-md-12">
              <label class="labels">Ponto de Referência</label>
              <input type="text" class="form-control" value="<?=$userlog[0]['ponto_ref']?>" placeholder="Ponto de referência" name="ponto_ref">
            </div>
            <div class="col-md-6">
              <label class="labels">CEP</label>
              <input type="text" class="form-control" placeholder="CEP" value="<?=$userlog[0]['cep']?>" name="cep">
            </div>
            <div class="col-md-6">
              <label class="labels">Bairro</label>
              <input type="text" class="form-control" value="<?=$userlog[0]['bairro']?>" placeholder="Bairro" name="bairro">
            </div>
            <div class="col-md-12">
              <label class="labels">Telefone</label>
              <input type="text" class="form-control" value="<?=$userlog[0]['tel1']?>" placeholder="Telefone" name="tel1">
              <br>
            </div>
            <input type="hidden" class="form-control" placeholder="Rua" value="<?=$userlog[0]['senha']?>">                         
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" name="enviar" value="Editar">Enviar</button>
            </div>
          </form>
        </div>
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
  <script>
    $(function () {
      $('.dropdown-toggle').dropdown();
    }); 
  </script>
  <script type="text/javascript">
    function acionarInput(){
      var file = document.querySelector('input[name=foto]');

      file.click();
    }
    function previewImg(){
      var imagem = document.querySelector('input[name=foto]').files[0];
      var preview = document.querySelector('img[name=foto_user]');
      var reader = new FileReader();

      reader.onloadend = function(){
        preview.src = reader.result;
      }

      if (imagem) {
       reader.readAsDataURL(imagem);
     }else{
      preview.src = "<?php echo('../Imagens/usuarios/'.$_SESSION['foto']) ?>";
    }
  }
</script>
</body>
</html>
