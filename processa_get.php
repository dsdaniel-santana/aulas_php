<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
<h1>Processamento usando metódo GET</h1>
<hr>

<?php 
/*ARRAY SUPER GLOBAL $_GET[]
É um array existente na linguagem, resposável por armazenar dados transmitidos via método GET.
Cada dado, fica em uma chave associativa dentro do array.
Esta chave é o nome do campo formulário.  */

//Capturando individualmente os dados dos campos do formulário
$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];
?>

<h2>Dados Recebidos</h2>
<ul>
    <li><b>Nome:</b> <?=$nome?></li>
    <li><b>E-mail:</b> <?=$email?></li>
    <li><b>Assunto:</b> <?=$assunto?></li>
    <li><b>Mensagem:</b> <?=$mensagem?></li>
</ul>
 
</body>
</html>