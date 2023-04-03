<?php

function deletar($post){
  include_once('../app/database/conexao.php');
  $id = $_POST['id'];
  $SQL = "UPDATE produtos SET vigente = 'N' WHERE id = $id;";
  $result = $this->mysqli->query($SQL);
  if($result) {
      return true;
  }
  return false;
}
  
?>