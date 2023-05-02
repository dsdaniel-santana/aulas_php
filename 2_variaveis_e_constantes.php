<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriaveis e Constantes PHP</title>
</head>
<body>
<H1>Usando variáveis e constantes</H1>
<hr>

<h2>Usando Váriaveis</h2>
<?php

//Variáveis
$curso = "Programador Web";
$ano = 2023;
$preço = 1278.75;
$area = "Back End";

//Saídas de dados
echo "<h2>Exemplos de saídas usando variáveis</h2>";
echo '<p>$curso</p>'; //trata com texto
echo "<p>$curso</p>"; //trata com interpolação

/*Ao usar variáveis dentro de strings/textos, é necessária as aspas duplas ""
para que o recurso seja interpretado. */

//Saída usando concatenação 
echo "<p><i>".$curso."</i></p>";

?>

<!-- Saída de dados ABREVIADA/SIMPLIFICADA
usando "shorthand tags" do PHP -->
<h2>Saída usando versão simplificada do PHP</h2>

<!-- Estamos em 2023 estudando Back-End -->
<p>Estamos em <?=$ano?>  estudando <?=$area?>. </p>

<!-- USANDO PHP SINTAXE TRADICIONAL
(mais verbosa e suscetível a erros) -->
<?php
echo "<p>Estamos em $ano estudando $area</p>"; 
?>

<h2>Usando Constantes</h2>
<?php
//Sintaxe Tradicional
define ("AUTOR", "Daniel da Silva Santana");
define ("JUROS", 10);

//Sintaxe mais recente
const EMPRESA = "Idea WebSites";
?>

<p>Autor do Site: <?=AUTOR?> </p>
<p>Taxa de Juros: <?=JUROS?>% em <?=$ano?></p>
<p>Prestador de Serviços: <?=EMPRESA?></p>

</body>
</html>