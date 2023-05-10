<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
<h1>Processamento usando metódo POST</h1>
<hr>

<?php 

/* Se o campo nome OU o campo email estiverem vazios  */
if( empty($_POST["nome"]) || empty($_POST["email"]) ){
?>

    <p style="color: red;">VOCÊ DEVE PREENCHER OS CAMPOS NOME E EMAIL, SEU BURRO!</p>
<?php
}else{


/*ARRAY SUPER GLOBAL $_POST[]
É um array existente na linguagem, resposável por armazenar dados transmitidos via método GET.
Cada dado, fica em uma chave associativa dentro do array.
Esta chave é o nome do campo formulário.  */

//Capturando individualmente os dados dos campos do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
?>

<h2>Dados Recebidos</h2>
<ul>
    <li><b>Nome:</b> <?=$nome?></li>
    <li><b>E-mail:</b> <?=$email?></li>

    <!-- SOBRE O !
    Em Programação o símbolo de exclamação ! significa inversão de lógica ou sentido.  -->

   <!-- Verificando se o campo ASSUNTO NÃO ESTÁ VAZIO -->
    <?php if( !empty($assunto)) { ?>
    <!-- Se não está, então mostramos o assunto escolhido -->
    <li><b>Assunto:</b> <?=$assunto?></li>
    <?php } ?>

    <!-- Verificando se o campo MENSAGEM NÃO ESTÁ VAZIO -->
    <?php if( !empty($mensagem)) { ?>
    <!-- Se não está, então mostramos o assunto escolhido -->    
    <li><b>Mensagem:</b> <?=$mensagem?></li>
    <?php } ?>
</ul>

<?php 
}
?>

 
</body>
</html>