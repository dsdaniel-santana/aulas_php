<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios de PHP</title>
</head>
<body>
<h1>Exercício 1</h1>
<hr>

<?php
const PESSOA = "Chaves";
$curso = "Computação";
$cargaHoraria = 20;
$limiteDeFaltas = $cargaHoraria/4; //*0.25
?>

<p><b>Aluno: </b><?=PESSOA?></p>
<p><b>Disciplina: </b><?=$curso?></p>
<p><b>Carga Horaria: </b><?=$cargaHoraria?> horas</p>
<p><b>Limite de Faltas: </b><?=$limiteDeFaltas?> horas</p>



</body>
</html>