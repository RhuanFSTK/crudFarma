<?php 

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
  /* Conexão com o banco */
  include_once('../app/database/conexao.php');

  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  /* Senha */
  if(isset($_POST['senha'])){
    $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
  }
}else{
    header('Location: index.php');
}

?>