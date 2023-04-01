<?php
include('../app/database/conexao.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])){
  if(strlen($_POST['usuario']) == 0){
    echo "<div class='alert alert-danger' role='alert'>
            Preencha seu usuario!
          </div>";
  }else if(strlen($_POST['senha']) == 0){
    echo "<div class='alert alert-danger' role='alert'>
            Preencha sua Senha!
          </div>";
  }else{
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $SQL = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha';";
    $result = $mysqli->query($SQL) or die("Fala na execução do código SQL" . $mysqli->error);
    $rows = $result->num_rows;
    if ($rows == 1) {
      $usuario = $result->fetch_assoc();
      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];
      header("Location: home.php");
      

    } else {
      echo "<div class='alert alert-danger' role='alert'>
            Falha ao logar! Usuario ou senha incorretos.
          </div>";
    }
  }
}

?>