<?php

if(isset($_POST['nome']) && !empty($_POST['descri']) && !empty($_POST['qnt'])){
  /* Conexão com o banco */
  include_once('../app/database/conexao.php');

  $nome = $_POST['nome'];
  $descri = $_POST['descri'];
  $qnt = $_POST['qnt'];

  /* Adicionar produto (Create) */
  $SQL = "INSERT INTO produtos (nome, descri, qnt, vigente ) VALUE ('$nome','$descri','$qnt','S');";
  $result = $mysqli->query($SQL);

  function menssagem($texto, $tipo){
    echo "<div class='alert alert-$tipo' role='alert'>
            $texto
          </div>
          <button class='btn btn-primary'><a href='produtos.php'>Lista</a></button>";
  }

  if($result == true){
    header('Location: produtos.php');
  }else{
    menssagem("Erro ao cadastrar $nome ", 'danger');
  }  
}


?>

  