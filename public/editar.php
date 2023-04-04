<?php
include "../app/database/conexao.php";
require "./protect.php";

/* Filtrar array e tratar dados (function php) */
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT, FALSE);
$id = $dados['id'];

/* Retornar na tabela (Read) */
if($dados > 0){
  $SQL = "SELECT * FROM produtos WHERE id = '$id' AND vigente = 'S';";
  $result = $mysqli->query($SQL);
  $produto = $result->fetch_assoc();
}else{
  die('Sem dados pra editar !');
}

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$descri = isset($_POST['descri']) ? $_POST['descri'] : '';
$qnt = isset($_POST['qnt']) ? $_POST['qnt'] : '';

/* Editar (Update) */
if(isset($_POST['editar'])){

  $SQL = "UPDATE produtos SET nome = '$nome', descri = '$descri', qnt = '$qnt' , vigente = 'S' WHERE id = '$id';";
  $result = $mysqli->query($SQL);

  if($result == true){
    header('Location: produtos.php');
  }
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Editar</title>
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
        <form action="" method="post">
          <input for="id" type="hidden" class="form-control" id="id" name="id" value="<?= $produto['id'] ?>">
          <div class="col-10 d-flex">
            <div class="col-md-5 m-2">
              <label for="produto" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome" value="<?= $produto['nome'] ?>" autofocus>
            </div>
            <div class="col-md-8 m-2">
              <label for="produto" class="form-label">Descrição</label>
              <input type="text" class="form-control" id="descri" name="descri" value="<?= $produto['descri'] ?>" required="">
            </div>
            <div class="col-md-1 m-2">
              <label for="produto" class="form-label">Quantidade</label>
              <input type="text" class="form-control" id="qnt" name="qnt" value="<?= $produto['qnt'] ?>">
            </div>
          </div>
          <div class="col-md-12 d-flex flex-row-reverse">
            <button class="btn btn-danger m-1"><a href="produtos.php" class="text-decoration-none text-light" >Voltar</a></button>
            <button class="btn btn-primary m-1" type="submit" id="editar" name="editar" value="editar">salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
