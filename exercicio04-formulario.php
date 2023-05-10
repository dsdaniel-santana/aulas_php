<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio04-formulario.html</title>
</head>
<body>
<h1>Formulário HTML</h1>
    <hr>

    <form autocomplete="off" action="exercicio04-dados.php" method="post">
        <p>
            <label for="nome">Nome do Produto:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        
    <?php 
    $fabricante = ["", "IBM", "DELL", "APPLE"];
    ?>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
            <?php 
        foreach ($fabricante as $fabricantes){
            ?>     
        <option><?=$fabricantes?></option>    
    <?php    
    }
    ?>
       </select>

        </p>
        

		<p>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" min="100" max="10000" required>

        </p>

        <p>
            <label for="mensagem">Descrição:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Submit</button>
    </form>
    
</body>
</html>