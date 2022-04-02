<?php include 'conexao.php'; ?>

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
          <a class="nav-link active text-white" aria-current="page" href="login.php">login</a>
          
          </li>
          <li class="nav-item"> 
        <button type="button" name="sair"class="btn btn-dark" href="?usuarioLogOut" ><a class="text-decoration-none text-white"href="?usuarioLogOut">Sair</a></button>
        </li>
      </ul>
      <form class="d-flex">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">  <!--  posteriormente colocar uma pesquisa -->
       <button class="btn btn-outline-success" href="login.php" type="submit"></button>
      </form>
    </div>
  </div>
</nav>
    <section class="jumbotron text-center bg-dark text-white">
      <div class="container">
      <h1 style="color:#DBB522;" class="jumbotron-heading ">INSIDE.</h1> <br>
      <h3 class="text-white">
        O <strong>melhor</strong> do mundo jornalistico onde e quando você quiser
      </h3><br><br>
      <a href="sejaMembro.php"><button class="btn btn-outline-warning" type="submit">Seja Membro</button></a> <br>
      <br>
      </h3><br>
      </div>
    </section>
<br>
    <section class="jumbotron text-center">
      <div class="container">
      <h2 class="jumbotron-heading">Vantagens da Assinatura</h2><br><br>
      <h3 class="text-muted">
        Com a ssinatura da INSIDE. você tem acessoa todas as noticias ultra mega blaster power especiais na maior velocidade :D
      </h3>
      </div>
    </section>
</body>
<!--
    $result = pg_query($db_connection, "SELECT lastname FROM employees");
-->
</html>