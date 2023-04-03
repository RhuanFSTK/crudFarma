<?php

if(isset($_POST['id'])){
  $id = $_POST['id'];
}else{
  $id = '';
}

function editar($post){
  include_once('../app/database/conexao.php');
  $id = $_POST['id'];
  $produto = array();
  $SQL = "SELECT * 
          FROM produtos
          WHERE id = '$id' AND vigente = 'S';";
  $result = $this->mysqli->query($SQL);
  if ($result) {
      foreach ($result as $produto) {
          $produto[] = $produto;
      }
  }
  return $produto;
}
  
?>

