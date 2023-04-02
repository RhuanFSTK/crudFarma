<?php 
require "../vendor/autoload.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="./assets/css/cadastrar.css">
</head>
<body>
  <div class="body-content">
    <div class="module">
      <h1>Criar conta</h1>
      <form class="form" action="createSenha.php" method="post" autocomplete="off">
        <div class="alert alert-error"></div>
        <input type="text" placeholder="Nome" name="nome" required />
        <input type="text" placeholder="Usuário" name="usuario" required />
        <input type="password" placeholder="Senha" name="senha" autocomplete="new-password" required />
        <input type="submit" value="submit" name="submit" class="btn btn-block btn-primary" />
      </form>
    </div>  
  </div>
</body>
</html>