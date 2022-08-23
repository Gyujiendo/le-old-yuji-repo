<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "leonardo.dau@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['nomeCliente'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel 
//$assunto
$assunto = $nome . " - Agendamento";
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$dataConsulta = $_POST['dataConsulta'];
$array = explode('-', $dataConsulta);
$dataConsulta = $array[2]."/".$array[1]."/".$array[0];

$mensagem = "<strong>Nome: </strong>".$nome."<br>
			 <strong>E-mail: </strong>".$email = $_POST['email']."<br>
			 <strong>Telefone: </strong>".$celCliente = $_POST['celCliente']."<br>
			 <strong>Serviço contratado: </strong>".$servico = $_POST['servico']."<br>
			 <strong>Data do agendamento: </strong>".$dataConsulta."<br>
			 <strong>Período: </strong>".$periodo = $_POST['periodo'];
//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  leonardo.dau@gmail.com\n"; 
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  leonardo.dau@gmail.com\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  leonardo.dau@gmail.com\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

header('Location: agendamento.php'); 
?>