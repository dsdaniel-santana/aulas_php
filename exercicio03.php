<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3.php</title>
</head>
<body>
<h1>Exercicio 3.</h1>
<hr>

<?php
$salario = 1600;


if($salario <1500){
    $novoSalario = $salario*1.15;

}elseif($salario <=3000){
    $novoSalario = $salario*1.10;

}else{
    $novoSalario = $salario*1.05;
}


?>

<p><b>Salario:</b> R$<?=number_format($salario,2, ',', '.')?> <br>

<b>Novo Salario:</b> R$<?=number_format($novoSalario,2, ',', '.')?></p>

</body>
</html>