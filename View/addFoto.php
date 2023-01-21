<html lang="pt-br">
<?php 
session_start();
include("../Controller/protect.php");
protect();
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
  include("nav.php");
  ?>
  <!-- Containner 1 -->
  <br><br>
  <div class="container-fluid col-10 offset-1 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-5 col-md-12 col-sm-12">
        <div class="bg-white h-100">
          <div class="col-10 offset-1">
            <br><br>
            <?php if (isset($_SESSION['erro'])) {?>
              <div class="alert alert-danger text-center" role="alert">
               Email ou Senha inválidos!
             </div>
             <?php  
             unset($_SESSION['erro']);
           }
           ?>      
           <h1 class="text-center">Adicionar Foto de perfil.</h1>
           <br>
           <form class="" action="/assistencia/Controller/AcoesUsuario.php" method="POST" enctype="multipart/form-data">
            <div class="row d-flex justify-content-center">
             <div class="col-6 position-relative">
              <img src="<?php echo('../Imagens/usuarios/'.$_SESSION['foto']) ?>" width="170" height="170" class="rounded-circle border shadow mb-3" name="foto_user">
              <button class="bg-primary btn profile-button text-white rounded-circle" style="height: 40px; border: none; position: absolute; right: 10%;" onclick="acionarInput()" type="button"><i class="bi bi-camera" style="font-size: 18px"></i></i></button>
            </div>
            <div class="py-3 text-center">
              <input class="py-3" type="file" name="foto" onchange="previewImg()" id="inp_file" style="display: none;">
            </div> 
          </div>
          <?php if (isset($_SESSION['erroftUser'])) {?>
                <div class="alert alert-danger text-center" role="alert">
                 O formato do arquivo é incompatível!
               </div>
               <?php  
               unset($_SESSION['erroftUser']);
             }
             ?>
          <div class="row">
            <div class="col-8">
              <a href="pagUser.php" class="btn btn-secondary">Mais tarde</a>
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-primary offset-9" name="enviar" value="addFoto">Enviar</button>
            </div>
          </div>
        </form>
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
