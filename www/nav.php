<nav class="navbar navbar-expand-lg fixed-top navbar-dark colorBG">

  <a class="navbar-brand fontLight" href="index.php" > <img src="imagens/logo.png" alt="" class="img-responsive" width="30" height="30"> DROPLET </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <form class="form-inline" style="margin-left: 25%;" method="POST" action="busca.php">
      <input class="form-control text-center" type="text" placeholder="Pesquise aqui uma marca (123 ou 1234)" aria-label="Search" size="60" id="pesquisa" name="pesquisa">
      <input type="submit" value="Search">
    </form>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link fontLight" href="index.php">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fontLight" href="index.php">Marcas<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link fontLight" href="carrinho.php">Carrinho (x itens)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fontLight" href="login.php">Login</a>
      </li>
    </ul>

  </div>

</nav>
