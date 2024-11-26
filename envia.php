<?php
    $nome = addslashes ($_POST['nome']);
    $email = addslashes ($_POST['email']);
    $telefone = addslashes ($_POST['telefone']);
    $mensagem = addslashes ($_POST['mensagem']);

    $para = "moysesjosef@gmail.com"  ;
    $assunto = "coleta de dados- Portfolio " ;

    $corpo = "Nome:". $nome."\n"."email".$email."\n" ;

    $cabeca= "from: moysesvalgore@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

   if (mail($para,$assunto,$corpo,$cabeca)) {
    echo("Email enviado com sucesso!");
    
    }else{
    echo(" Houve um erro ao enviar o email");
    }



?>