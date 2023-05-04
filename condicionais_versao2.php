<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais Versão 2</title>
<style>
.normal{
    background-color: lightseagreen;
    color: green;
}
.repor{
    background-color: lightpink;
    color: red;
}

.urgente {
    background: yellow;
}
</style>

</head>

<body>

<h1>Condicionais Versão2</h1>
<hr>

<h2>Simples</h2>

<?php
$numero = 10;
if( $numero >= 5){
?>    
    echo <p><?=$numero?> é maior/igual a 5</p>
<?php    
}
?>


<h2>Composta</h2>
<?php
$produto = "Ultrabook Asus";
$qtdeEmEstoque = "5"; // oque temos no momento
$qtdCritica = 5; //mínimo necessário
?>

<h3>Produto: <?=$produto?> </h3>
<h4>Estoque: <?=$qtdeEmEstoque?> </h4>

<?php
if($qtdeEmEstoque < $qtdCritica){
?>
    <p class="repor" >É necessário comprar-repor!</p>

<?php
    if($qtdeEmEstoque == 0){
?>
        <p><span class="urgente"> URGENTE</span> </p>
<?php
    }
    
} else {
?>
    <p class="normal">Estoque Normal.</p>
<?php

}

?>


<h2>Encadeada</h2>
<?php
// if($produto == "Ultrabook"){
//     $garantia = 3;
    
// }elseif($produto == "Geladeira"){
//     $garantia = 5;

// }elseif($produto == "Tv"){
//     $garantia = 2;

// }else{
//     $garantia = 1;
// }

/* switch/case é uma boa opção para condicionais de comparação direta, ou seja verificar se é igual a determinados valores */
switch($produto){
    case "Ultrabook" : $garantia = 3;
    case "Geladeira" : $garantia = 5;
    case "Tv" : $garantia = 2;
    default : $garantia = 1;

}
?>
<p> O <?=$produto?> tem garantia de<?=$garantia?>  ano(s).</p>



    
</body>
</html>