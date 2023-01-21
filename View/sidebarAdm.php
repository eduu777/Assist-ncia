<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
  <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
    <div style="position: fixed;">
      <a href="pagAdm.php" class="d-flex align-items-center text-white text-decoration-none text-center py-2">
        <span class="fs-5 d-none d-sm-inline">L&E Assistência</span>
      </a>
      <hr style="height:1px; width:170px; border-width:0; color:red; background-color:white;">
      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
          <a href="pagAdm.php" class="nav-link align-middle px-0" id="item1">
            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
          </a>
        </li>
        <li>
          <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle " id="orcs">
            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orçamentos</span></a>
            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
              <li class="w-100">
                <a href="orcamentos.php" class="nav-link px-3" id="item2"> <span class="d-none d-sm-inline">Todos</span></a>
              </li>
              <li>
                <a href="orcamentosPendentes.php" class="nav-link px-3" id="item3"> <span class="d-none d-sm-inline">Pendentes</span></a>
              </li>
              <li>
                <a href="orcamentosRespondidos.php" class="nav-link px-3" id="item4"> <span class="d-none d-sm-inline">Respondidos</span></a>
              </li>
            </ul>
          </li>
          <li>
            <a href="produtos.php" class="nav-link px-0 align-middle" id="item6">
              <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Produtos</span> </a>
            </li>
            <li class="mb-5">
              <a href="tabelacontas.php" class="nav-link px-0 align-middle" id="item5">
                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Lista de usuários</span> </a>
              </li>
            </ul>
            <br>
            <br>
            <div class="py-5">
              <hr style="height:1px; width:170px; border-width:0; color:red; background-color:white; position: fixed; top: 85%">
              <div class="dropdown pb-4" style="position: fixed; top: 90%;">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo('../Imagens/usuarios/'.$userlog[0]['foto']) ?>" width="30" height="30" class="rounded-circle">
                  <span class="d-none d-sm-inline mx-1"><?php echo(explode(" ", $userlog[0]['nome'])[0]); ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="editarAdm.php">Perfil</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="../Controller/logout.php">Sair</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </script>