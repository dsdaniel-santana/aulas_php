<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
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

<h1>Condicionais</h1>
<hr>

<h2>Simples</h2>
<?php
$numero = 10;
if( $numero >= 5){
    echo "<p>$numero é maior/igual a 5</p>";
}
?>


<h2>Composta</h2>
<?php
$produto = "Ultrabook Asus";
$qtdeEmEstoque = "5"; // oque temos no momento
$qtdCritica = 5; //mínimo necessário

echo "<h3>Produto: $produto </h3>";
echo "<h4>Estoque: $qtdeEmEstoque</h4>";

if($qtdeEmEstoque < $qtdCritica){
    echo "<p class='repor' >É necessário comprar-repor!</p>";
    if($qtdeEmEstoque == 0){
        echo "<p><span class='urgente'> URGENTE</span> </p>";

    }
    
} else {
    echo "<p class='normal'>Estoque Normal.</p>";


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

echo "<p> O $produto tem garantia de $garantia ano(s).</p>";
?>


    
</body>
</html>