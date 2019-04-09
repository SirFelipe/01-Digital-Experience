<?php

if(isset($_POST['enviar'])){

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $erro = FALSE;


  if(strlen($usuario) < 5 || strlen($usuario) > 10){
    echo "O nome do usuário deve conter entre 5 e 10 caracteres. <br>";
    $erro = TRUE;
  }

  if(strlen($senha) < 4){
    echo "Senha muito curta!. <br>";
    $erro = TRUE;
  }

  if(!strstr($email, '@')){
    echo "Digite o email corretamente!. <br>";
    $erro = TRUE;
  }

  if(strlen($estado) !=2){
    echo "Preencha corretamente o Estado. <br>";
    $erro = TRUE;
  }

if(!$erro){
  echo "Todos os dados foram preenchidos corretamente";
}



}



 ?>
