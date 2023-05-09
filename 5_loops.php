<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<h1>Loops (ou laços de repetição)</h1>
<hr>

<?php
/* Loops Tradicionais
while
for
do/while */

?>

<h2>While (enquanto)</h2>
<?php
$i = 1; // variável de controle
while($i <= 5){
?>   

<p>Senac Penha - PHP (i vale <?=$i?>)</p>

<?php
    $i++;
}
?>

<hr>

<h2>do/while</h2>
<ul>
<?php 
$j = 1;
do {
?>
    <li>PHP</li>
<?php
    $j++;
} while ($j <=5)
?>

</ul>

<hr>

<h2>for</h2>
<?php 
$bandas = ["Pink Floyd", "Savatage", "Slayer", "Rita Lee"];
?>

<section>
    <h3>Bandas</h3>
<?php for( $k = 0; $k < count($bandas); $k++) { ?>
    <p><?=$bandas[$k]?></p>

<?php 
} 
?>    
</section>

<hr>

<h2>Exercíco: lista de meses</h2>
<p>Crie um array contendo a lista de todos os meses do ano</p>
<p>Monte uma <b>lista ordenada</b> e, usando um <b>LOOP</b>, faça com que ela mostre o nome de cada mês. </p>

<?php 
$mes = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Octber", "November", "Decemeber"];
?>
 
<ol>
<?php for ($d = 0; $d <count ($mes); $d++) { ?>
    <li><?=$mes[$d]?></li>

<?php    
}
?>

</ol>

<hr>

<h2>Foreach</h2>
<!-- Para cada BANDA dentro do array BANDAS, mostre um parágrafo. -->
<?php foreach($bandas as $banda){?>
    <p>Banda: <b><?=$banda?></b> </p>

<?php } ?>

</body>
</html>