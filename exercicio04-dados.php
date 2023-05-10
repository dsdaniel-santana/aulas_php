<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio04-dados.php</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$mensagem = $_POST['mensagem'];
?>

<h2>Dados Recebidos</h2>
<ul>
    <li><b>Nome:</b> <?=$nome?></li>
    <li><b>Fabricante:</b> <?=$fabricante?></li>
    <li><b>Preço:</b> <?=$preco?></li>
    <li><b>Descrição:</b> <?=$mensagem?></li>
    
</ul>
    
</body>
</html>