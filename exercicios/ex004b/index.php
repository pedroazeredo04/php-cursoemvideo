<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprofundamento Strings</title>
</head>
<body>
    <h1>Aprofundamento Strings</h1>
    
    <?php 
        // Sintaxe heredoc
        // Serve para formatar strings sem sequências de escape
        // Para ver o resultado, abra o código fonte da página
        // (Ao serem exibidas em HTML, elas não funcionam)

        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
            Estou estudando
                $curso em $ano
        FRASE;

        echo "<br><br>";

        // Sintaxe nowdoc
        // Serve para formatar strings sem sequências de escape
        // É equivalente a uma aspas simples.
        
        $curso = "PHP";
        $ano = date('Y');
        echo <<<'FRASE'
            Estou estudando
                $curso em $ano
        FRASE;
    ?>

</body>
</html>