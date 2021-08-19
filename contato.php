<?php

if(isset($_POST['email']) && !empty($_POST['email']) &&
 isset($_POST['mensagem']) && !empty($_POST['mensagem'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$empresa = addslashes($_POST['empresa']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$to = "contato@accosistemas.com";
$subject = "Site: " .$assunto;
$body = "Nome: ".$nome."\r\n".
        "Empresa: ".$empresa."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem."\r\n\r\n".
$header = "From:contato@accosistemas.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo "<script> alert('Enviado com sucesso!'); location= './../index.html'; </script>";
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
  }
?>

