<?php

if(isset($_POST['email']) && !empty($_POST['email']) &&
 isset($_POST['message']) && !empty($_POST['message'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "contato@edischool.com.br";
$subject = "Contato pelo site";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$message."\r\n\r\n".
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

