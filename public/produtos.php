<?php
include('../app/database/conexao.php');
require "./protect.php";

/* Read */
$nome = $_POST['buscar'] ?? '';
$SQL = "SELECT * FROM produtos WHERE nome LIKE '%$nome%' AND vigente = 'S';";
$result = $mysqli->query($SQL);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Home</title>
  <!-- Links -->
  <link rel="stylesheet" href="../assets/css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
  <nav class="site-header sticky-top py-1 d-flex">
    <div class="container d-flex flex-column flex-md-row justify-content-around">
      <a class="py-2 d-none d-md-inline-block text-decoration-none" href="home.php">Inicio</a>
      <a class="py-2 d-none d-md-inline-block text-decoration-none" href="produtos.php">Produtos</a>
      <a class="py-2 d-none d-md-inline-block text-decoration-none" href="carrinho.php">Carrinho</a>
    </div>
    <button type="button" class="btn btn-light m-1"><a href="logout.php" style="color:#000; text-decoration:none;">Sair</a></button>
  </nav>
  <div class="page-inner m-2">
    <div class="card col-12 mb-3 mt-3">
      <div class="card-header">
        <h5 class="card-title">CADASTRAR</h5>
      </div>
      <div class="card-body">
        <form action="adicionar.php" method="post">
          <input for="id" type="hidden" class="form-control" id="id" name="id" value="">
          <div class="col-10 d-flex">
            <div class="col-md-5 m-2">
              <label for="produto" class="form-label">Nome</label>
              <input type="text" class="form-control" id="produto" name="nome" value="" required="" autofocus>
            </div>
            <div class="col-md-8 m-2">
              <label for="produto" class="form-label">Descrição</label>
              <input type="text" class="form-control" id="produto" name="descri" value="" required="">
            </div>
            <div class="col-md-1 m-2">
              <label for="produto" class="form-label">Quantidade</label>
              <input type="text" class="form-control" id="produto" name="qnt" value="" required="">
            </div>
          </div>
          <div class="col-md-12 d-flex flex-row-reverse">
            <button class="btn btn-primary" type="submit" id="salvar" name="salvar">salvar</button>
          </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <div class="card-body col-12 d-flex flex-row-reverse">
          <form class="d-flex" action="" method="post">
            <input class="form-control" type="search" name="buscar" id="buscar" placeholder="Nome" aria-label="Search">
            <button class="btn btn-primary m-1" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title">Produtos</h5>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" width="1%" class="align-middle text-center">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Descrição</th>
              <th scope="col" class="text-center">Quantidade</th>
              <th scope="col" width="1%">Editar</th>
              <th scope="col" width="1%">Deletar</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($produto = $result->fetch_assoc()) { ?>
              <tr>
                <th scope="row"><?= $produto['id'] ?></th>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['descri'] ?></td>
                <td class="text-center"><?= $produto['qnt'] ?></td>
                <td class="align-middle"><button class="btn" id="buttonId" onclick="editarProduto('<?php echo $produto['id'] ?>')"><i class="fas fa-edit text-primary"></i></button></td>
                <td><button class="btn" onclick="apagarProduto('<?= $produto['id'] ?>')"><i class="fas fa-trash-alt text-danger"></i></button></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<!-- Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fd101988a9.js" crossorigin="anonymous"></script>

</html>

<script>

</script>