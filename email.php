<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['mesage']);

$to = "geraldlima2112@gmail.com";
$subject = "Contado - Site comafa";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mesage;
$header = "From:comafa@industria.com"."\r\n".
            "Repley-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso");
}
    else{
    echo("O email não foi enviado");
}

}

?>