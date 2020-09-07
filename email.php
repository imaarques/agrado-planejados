<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST(['mensagem']);

    $to = "agradoplanejados@gmail.com";
    $subject = "Contato - Site";
    $body = "Nome: ".$nome."\r\n".
    "E-mail: ".$email."\r\n".
    "Assunto: ".$assunto."\r\n".
    "Mensagem: ".$mensagem;

    $header = "From:contato@agradoplanejados.com.br"."\r\n"."Reply-to:".$email."\e\n"."X=Mailer:PHP/".phpversion();

   if (mail($to,$subject,$body,$header)){
       echo("E-mail enviado com sucesso!");
   }else{
       echo("O E-mail não pode ser enviado");
   }


?>