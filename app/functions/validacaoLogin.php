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
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $SQL = "SELECT * FROM usuarios WHERE usuario = '$usuario';";
    $result = $mysqli->query($SQL) or die("Fala na execução do código SQL" . $mysqli->error);
    $rows = $result->num_rows;
    $usuario = $result->fetch_assoc(); 
    
    /* Senha hash no db */
    $senhadb = $usuario['senha']; 
    
    /* Virificando se tem resultado da consulta SQL */
    if ($rows == 1) {
      /* Varificando se a senha atual corresponde a hsch no db */
      if(password_verify($senha, $senhadb)){ 
        /* Iniciando sessão caso nao exista */
        if(!isset($_SESSION)){
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: home.php");
      } 
    } else {
      echo "<div class='alert alert-danger' role='alert'>
            Falha ao logar! Usuario ou senha incorretos.
          </div>";
    }
  }
}

?>