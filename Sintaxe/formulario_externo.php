<?php
  if(isset($_POST['enviar'])){
    // echo "Oba deu certo";
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

//     if($usuario && $senha){
//       echo "Seja bem vindo " . $usuario;
//       echo "<br>";
//       echo "Sua senha é: " . $senha;
//     } else {
//       echo "O campo não pode estar vazio";
//     }
// }

    $nomes = array("gtorrente", "Marcelo", "Teresa");

    if(strlen($usuario) < 5){
      echo "Por favor, insira um nome maior.";
    }
    if(strlen($usuario) > 12){
      echo "Nome de usuário muito grande!";
    }
      if(!in_array($usuario, $nomes)){
        echo "Você não tem permissão";
      } else {
        echo "Bem vindo " . $usuario;
      }
}
 ?>
