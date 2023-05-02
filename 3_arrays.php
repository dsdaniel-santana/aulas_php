<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h1>Arrays (Vetores ou Matrizes)</h1>
<hr>

<h2>Array com ídndice numérico</h2>

<?php
//Declarando arrays como variáveis
$bandas = ["Rush", "Slayer", "Iron Maiden"];
$cursos = array("HTML5", "PHP", "Design", "JS");

//Desclarando arrays como constantes
const UNIDADES_SENAC = ["Penha", "Itaquera"];
define ("UNIDADES_SESC",["Belenzinho", "Bertioga"]);
?>


<h3>Sáida de dados de arrays</h3>
<ul>
    <li>Banda que mais gosto: <?=$bandas[0]?> </li>
    <li>Assunto estudado: <?=$cursos[1]?></li>
    <li>Estamos no Senac: <?=UNIDADES_SENAC[0]?></li>
    <li>O Sesc <?=UNIDADES_SESC[1]?> é uma colônia de férias. </li>
</ul>

<h2>Array Associativo</h2>

<?php
//Chaves associativas
$livro = [
    "titulo" => "Senhor dos Anéis",
    "autor" => "J.R.R Tolkien",
    "ano" => 1954
];
?>
<p>Livro: <?=$livro["titulo"]?></p>
<p>Escrito por: <?=$livro["autor"]?></p>
<p>Em: <?=$livro["ano"]?></p>

<?php
//REVISAR

//Só PHP, OK!
echo $livro["titulo"];

//PHP com HTML (EVITAR):
//echo "<p>$livro ["titulo"]</p>"; // erro 
//echo "<p>$livro ['titulo']</p>"; // erro 
//echo "<p>$livro [\"titulo"\]</p>"; // erro 

//PHP COM CONCATENAÇÃO, OK (EVITAR SE POSSIVEL)
echo "<p>".$livro["titulo"]. "<\p>"

//PHP COM

?>


</body>
</html>