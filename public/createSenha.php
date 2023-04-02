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
    
    $SQL = "SELECT * FROM usuarios WHERE nome = '$nome' AND usuario = '$usuario' AND senha = '$senhaHash';";
    $result = $mysqli->query($SQL);

    if(mysqli_num_rows($result) < 1){
      $SQL = "INSERT INTO usuarios (nome, usuario, senha)
              VALUES ('$nome', '$usuario', '$senhaHash');";
      $result = $mysqli->query($SQL);
      echo "<div class='alert alert-success' role='alert'>
              <a href='index.php' class='alert-link'>Faça o login</a>
            </div>";
    }else{
      echo "Usuario já cadastrado ! (UM BOTÃO PARA VOLTAR A CADASTRO)";
    }
  }
}else{
    
}

?>