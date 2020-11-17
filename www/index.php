<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Droplet</title>

  <link rel="shortcut icon" type="image/x-icon" href="imagens/fav.ico">
  <link rel="stylesheet" href="Class.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

</head>
<body>

<!-- Nav bar-->

<?php  include("nav.php");  ?>
<!-- End Nav bar-->

<!-- Container style="width: 18rem; padding-left: 100px; padding-top: 40px;"-->
<div class="container-fluid" >
	<div class="row pad" style="margin-top: 60px;">
		<div class="col-lg-8 text-center mobile">
			<img src="imagens/batata.jpg" class="img-responsive"> 
		</div>
		<div class="col-lg-4 text-center">
			<p class="text-center fontWelcome">Seja Bem-Vindo</p>
			<img src="imagens/logo.png" class="img-responsive" class="borderComColorBG">
			<br>
		</div>
	</div>

	<div class="row colorBG pad" >
    <!-- inicio do Card -->
		<div class="col-lg text-center">
            <div class="card">
  				<img src="imagens/coca2.jpg" class="card-img-top img-responsive" alt="...">
 				<div class="card-body">
   					<p class="card-text">Coca-Cola 2L</p>
   					<p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Coca-Cola Inc.</p>
   					<p>R$8,00</p>
   					<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/coca2.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Coca-Cola 2L</h5>
        <p class="card-text"> 
          <p>Oferecido por: Coca-Cola Inc.</p>
          <p>R$8,00</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->

        <!-- inicio do Card -->
    <div class="col-lg text-center">
            <div class="card">
          <img src="imagens/roupa.jpg" class="card-img-top img-responsive" alt="...">
        <div class="card-body">
            <p class="card-text">Moleton Adidas Masculino</p>
            <p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Adidas AG</p>
            <p>R$ 199,99</p>
            <p>5x de R$ 41,20</p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModa2">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/roupa.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Moleton Adidas Masculino</h5>
        <p class="card-text">
          <p>Oferecido por: Adidas AG</p>
          <p>R$ 199,99</p>
          <p>5x de R$ 41,20</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->

        <!-- inicio do Card -->
    <div class="col-lg text-center">
            <div class="card">
          <img src="imagens/perfum1.jpg" class="card-img-top img-responsive" alt="...">
        <div class="card-body">
            <p class="card-text">Perfume Paco Rabanne</p>
            <p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Paco Rabanne</p>
            <p>R$500,00</p>
            <p>5x de R$103,30</p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModa3">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/perfum1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Perfume Paco Rabanne</h5>
        <p class="card-text">
          <p>Oferecido por: Paco Rabanne</p>
          <p>R$500,00</p>
          <p>5x de R$103,30</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->

        <!-- inicio do Card -->
    <div class="col-lg text-center">
            <div class="card">
          <img src="imagens/tenis3.jpg" class="card-img-top img-responsive" alt="...">
        <div class="card-body">
            <p class="card-text">Tênis Preto</p>
            <p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Nike Inc..</p>
            <p>R$300,00</p>
            <p>8x de 47,20</p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModa4">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/tenis3.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tênis Preto</h5>
        <p class="card-text">
          <p>Oferecido por: Nike Inc.</p>
          <p>R$300,00</p>
          <p>8x de 47,20</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->

	</div>

	<div class="row pad" >

    <!-- inicio do Card -->
    <div class="col-lg text-center">
            <div class="card">
          <img src="imagens/coca2.jpg" class="card-img-top img-responsive" alt="...">
        <div class="card-body">
            <p class="card-text">Coca-Cola 2L</p>
            <p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Coca-Cola Inc.</p>
            <p>R$8,00</p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModa5">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/coca2.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Coca-Cola 2L</h5>
        <p class="card-text">
          <p>Oferecido por: Coca-Cola Inc.</p>
          <p>R$8,00</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->

        <div class="col-lg text-center">
            <div class="card">
          <img src="imagens/tenis.jpg" class="card-img-top img-responsive" alt="...">
        <div class="card-body">
          <p class="card-text">Tênis Adidas Masculino</p>
            <p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Adidas AG</p>
            <p>R$ 229,90</p>
            <p>10x de R$ 22,99</p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModa6">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/tenis.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tênis Adidas Masculino</h5>
        <p class="card-text">
          <p>Oferecido por: Adidas AG</p>
            <p>R$ 229,90</p>
            <p>10x de R$ 22,99</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->

                <div class="col-lg text-center">
            <div class="card">
          <img src="imagens/monster2.jpg" class="card-img-top img-responsive" alt="...">
        <div class="card-body">
          <p class="card-text">Energy Drink 500mL</p>
            <p class="color3">FRETE GRÁTIS</p>
            <p>Oferecido por: Monster Beverage Co.</p>
            <p>R$7,50</p>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModa7">
  COMPRAR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imagens/monster2.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Energy drink 500ml</h5>
        <p class="card-text">
          <p>Oferecido por: Monster Beverage Co.</p>
            <p>R$7,50</p>
        </p>
        <p class="card-text"><small class="text-muted">Frete Grátis</small></p>
        <button type="button" class="btn btn-success btn-lg btn-block">COMPRAR</button>
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
        <!-- Final do Card -->
	</div>


<!-- End Container-->

<!-- Footer-->
	<div class="row colorBG" style="height: 325px;">
		<div class="col-lg-4 text-white text-center" style="padding-top: 60px;">
			<p style="color: white;">Integrantes do Grupo:</p>
			<p style="color: white;">Antonio Gabriel</p>
			<p style="color: white;">João Victor</p>
			<p style="color: white;">Marinaldo Silva</p>
			<p style="color: white;">Victor Domingues</p>
		</div>
		<div class="col-lg-4 text-white text-center" style="padding-top: 30px;">
			<img src="imagens/logo.png" class="img-responsive">
			<p style="color: white;">A Loja Das Lojas</p>
		</div>
		<div class="col-lg-4 text-white text-center" style="padding-top: 100px;">
			Nós da Droplet,<br> Nos COMPROMETEMOS em oferecer ao consumidor<br> a PRATICIDADE de ir ao mercado<br><b> sem sair de casa</b></p>
		</div>
	</div>


</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>