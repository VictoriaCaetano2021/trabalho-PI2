<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Pagina Inicial - Apresentação</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="#">INSIDE.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">voltar</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
    <section class="jumbotron text-center bg-dark text-white">
      <div class="container">
      <h1 style="color:#DBB522;" class="jumbotron-heading ">INSIDE.</h1> <br>
      </div>
    </section>
    <br>
    <section class="jumbotron text-center">
        <div class="container">
        <div class="container col-md-5 mx-auto">
        <div class="shadow-lg p-3 mb-5 bg-white  rounded">
    <section class="jumbotron  text-center "><br><br>

    <form class="form-entrar" action="SejaMembro.php" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>

        <i class="fa-solid fa-user"  alt="" width="100" height="100"></i>
        <h1 class="h3 mb-3 font-weight-normal">Seja Membro</h1>
        <h5>Preencha o formulário e nossa equipe entrará em contato para proseguir com a assinatura :D </h5>
        <div class="row g-3">
        <div class="col"><br>
            <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required><br>
            <input type="mail" class="form-control" placeholder="email" name="email" required><br>
            <input type="number" class="form-control" placeholder="999999999" name="telefone" require><br>
        </div>
        </div>
        <br>    <button class="btn btn-lg btn-warning btn-block" name="entrar"type="submit">Enviar</button>
    </form>

</section>
</div>
</div>
</div>
</section>
</body>
</html>
<?php 


?>