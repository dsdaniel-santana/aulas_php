<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerício 2</title>
</head>
<body>

<h1>Exercício 2</h1>
<hr>

<?php
$dados = [ 
    /* chave associativa => valor */
    "login" => "Veruska",
    "senha" => "soeusei2023",
    "idade" => "23",
    "uf" => "SP",
];
?>

<ol>
<li><b>Login:</b> <?=$dados["login"]?></li>
<li><b>Idade:</b> <?=$dados["idade"]?></li>
<li><b>UF:</b> <?=$dados["uf"]?></li>
</ol>

</body>
</html>
