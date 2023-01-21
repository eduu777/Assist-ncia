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
  <div class="container-fluid col-10 offset-1 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-7">
        <div class="bg-white h-100">
          <div class="col-10 offset-1">
            <br><br>     
            <h1 class="text-center">Solicitar Orçamento:</h1>
            <br>
            <form class="" action="/assistencia/Controller/AcoesProduto.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-10">
                  <label>Modelo do aparelho<label class="text-danger">*</label></label>
                  <input type="text" class="form-control" placeholder="Modelo do seu aparelho" name="modelo" required="">
                </div>
                <div class="form-group col-2">
                  <label>Qtd.<label class="text-danger">*</label></label>
                  <input type="number" class="form-control" placeholder="qtd" name="qtd" value="1" required="">
                </div>
              </div>
              <div class="form-group">
                <label>Fabricante<label class="text-danger">*</label></label>
                <select class="form-select" name="fabricante" required="">
                  <option value="">-Selecione o fabricante-</option>
                  <option value="Motorola">Apple</option>
                  <option value="Asus">Asus</option>
                  <option value="LG">LG</option>
                  <option value="Xiaomi">Xiaomi</option>
                  <option value="Nokia">Nokia</option>
                  <option value="Huawei">Huawei</option>
                  <option value="Motorola">Motorola</option>
                  <option value="Sansung">Sansung</option>
                </select>
              </div>
              <div class="form-group">
                <label>Defeito<label class="text-danger">*</label></label>
                <input type="text" class="form-control" placeholder="Defeito do seu aparelho" name="estado" required="">
              </div>
              <div class="form-group">
                <label>Fale um pouco mais sobre o defeito <label class="text-secondary">(opcional)</label></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
              </div>
              <div class="mb-3">
                <label>Adicione uma foto <label class="text-secondary">(opcional)</label></label>
                <input class="form-control" type="file" id="formFile" name="foto" onchange="previewImg()">
              </div>
              <div class="row">
                <div class="col-5">
                  <img style="width: 20vh;" name="foto_Prod">
                </div>
              </div>
              <?php if (isset($_SESSION['erroft'])) {?>
                <div class="alert alert-danger text-center" role="alert">
                 O formato do arquivo é incompatível!
               </div>
               <?php  
               unset($_SESSION['erroft']);
             }
             ?>
             <br>
             <a href="pagUser.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>
             <button type="submit" class="btn btn-primary" name="enviar" value="addproduto">Solicitar</button>
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
    var preview = document.querySelector('img[name=foto_Prod]');
    var reader = new FileReader();

    reader.onloadend = function(){
      preview.src = reader.result;
    }

    if (imagem) {
     reader.readAsDataURL(imagem);
   }else{
    preview.src = "";
  }
}
</script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
