<?php
// Incluir o PHPMailer no projeto
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
//Instanciar um objeto PHPMailer
$mail = new PHPMailer;
 
//Função de definição do SMTP
$mail->isSMTP();
 
//Configurações do servidor
$mail -> Host = 'smtp-mail.outlook.com';
$mail -> SMTPAuth = true;
$mail -> Username = 'Aula_Senac@Outlook.com';
$mail -> Password = 'Senha@1234';
$mail -> SMTPSecure = 'tls';
$mail -> Port = 587;
//Define o remetente
$mail -> setFrom ('Aula_Senac@Outlook.com', 'Ana');
//Define o destinatário
$mail -> addAddress('ana.matos4@alunos.sc.senac.br');
//Define o assunto e o corpo do email
$mail -> Subject = 'Título do e-mail';
$mail -> Body = 'Esse é um e-mail de teste enviado pelo PHPMailer';
 
$mail -> isHTML(true);
 
if(!$mail -> send()){
    echo 'Erro no envio do e-mail';
    echo 'Erro: '.$mail -> ErrorInfo;
}
else{
    echo 'Email enviado com sucesso';
}
?>