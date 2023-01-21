<html lang="pt-br">
<?php 
include("../Controller/protect.php");
protect_adm();
include("../Controller/includeuserlog.php");
include("../Model/DAO/OrcamentoDAO.php");
include("../Model/DAO/ProdutoDAO.php");
$daoorc = new OrcamentoDAO;
$daop = new ProdutoDAO;
$users = $dao->listartodos();
$qtdusers = count($users);
$produtos = $daop->listartodos();
$qtdprod = count($produtos);
$panalise = 0;
$pconserto = 0;
$pfinalizado = 0;
foreach ($produtos as $p) {
    if ($p['stts'] == "Em análise") {
        $panalise++;
    }else if ($p['stts'] =="Consertando") {
        $pconserto++;
    }else{
        $pfinalizado++;
    }
}
$orcs = $daoorc->listartodos();
$totalorcs = count($orcs);
$orcaguard = 0;
$orcresp = 0;
foreach ($orcs as $o) {
    if ($o['stts'] == "Aguardando resposta") {
        $orcaguard++;
    }else if ($o['stts'] =="Orçamento Respondido") {
        $orcresp++;
    }
}
?> 
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
    <title>Assistência Técnica</title>
</head>
<body class="custom">
    <div class="container-fluid">

        <div class="row flex-nowrap">
            <?php include("sidebarAdm.php"); ?>
            <div data-bs-spy="scroll" class="col py-3">
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-3">
                            <a href="tabelacontas.php" class="text-decoration-none text-black">
                                <div class="mb-4 shadow">
                                    <div class="card">
                                      <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                          <div>
                                            <h3 class="text-success counter"><?=$qtdusers?></h3>
                                            <p class="mb-0">Usuários</p>
                                            <br>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="bi bi-people text-success" style="font-size: 45px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="orcamentosRespondidos.php" class="text-decoration-none text-black">
                        <div class="shadow">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                  <div>
                                    <h3 class="text-success counter"><?=$orcresp?></h3>
                                    <p class="mb-0">Orçamentos Respondidos</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="bi bi-check-lg text-success" style="font-size: 45px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="orcamentosPendentes.php" class="text-decoration-none text-black">
                <div class="shadow">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div>
                            <h3 class="text-danger counter"><?= $orcaguard?></h3>
                            <p class="mb-0">Orçamentos Pendentes</p>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-clock text-danger" style="font-size: 45px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<div class="col-3">
    <a href="orcamentos.php" class="text-decoration-none text-black">
        <div class="shadow">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-success counter"><?=$totalorcs?></h3>
                    <p class="mb-0">Orçamentos</p>
                    <br>
                </div>
                <div class="align-self-center">
                    <i class="bi bi-clipboard2-data text-success" style="font-size: 45px;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</a>
</div>
</div>
<div class="row">
    <div class="col-6">
        <div class="shadow">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <div id="columnchart_material" style="width: 420px; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-6">
    <div class="shadow">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <div id="piechart" style="width: 420px; height: 300px;"></div>
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
<script type="text/javascript">
    document.getElementById('item1').style.color = 'white';
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Ano', 'Total', 'Pendentes', 'Respondidos'],
      ['2022', <?=$totalorcs?>, <?=$orcaguard?>, <?=$orcresp?>]
      ]);

    var options = {
      chart: {
        title: 'Orçamentos',
        subtitle: 'Total, Respondidos, e Pendentes',
    }
};

var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Produtos', 'Em análise, Consertando e Finalizado'],
      ['Em análise', <?=$panalise?>],
      ['Consertando', <?=$pconserto?>],
      ['Finalizado', <?=$pfinalizado?>]
      ]);

    var options = {
      title: 'Produtos'
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>

<script>
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 10,
            time: 400
        });
    });

</script>
</body>
</html>
