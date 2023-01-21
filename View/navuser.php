      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container-fluid">
          <li class="nav-link">
            <a class="navbar-brand" href="pagUser.php"><img src="../Imagens/loja/logoblack.png" style="width: 50px"></a>
          </li>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <li class="nav-link">
                <a class="nav-link" href="solicitarOrc.php">Solicitar Orçamento</a>
              </li>
              <li class="nav-link">
                <a class="nav-link" href="orcUser.php">Meus Orçamentos</a>
              </li>
              <li class="nav-link dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo('../Imagens/usuarios/'.$userlog[0]['foto']) ?>" width="30" height="30" class="rounded-circle border">
                  <span class="d-none d-sm-inline mx-1"><?php echo(explode(" ", $_SESSION['usuario'])[0]); ?></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="orcUser.php">Meus orçamentos</a></li>
                  <li><a class="dropdown-item" href="editarUser.php">Perfil</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="../Controller/logout.php">Sair</a></li>
                </ul>
              </li>            
            </div>
          </div>
        </div>
      </nav>
      <br>