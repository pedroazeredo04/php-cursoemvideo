<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>

    <?php
        // Concatenação: usa-se o operador .
        $nome = "Rodrigo";
        const SOBRENOME = "Nogueira";
        $nomeCompleto = "$nome " . SOBRENOME;
        echo $nomeCompleto . "<br>";


        $php = "PHP";
        // Double quoted há interpretação do conteúdo
        echo "$php \u{1F418} <br>";


        // Single quoted não há interpretação do conteúdo
        echo '$php \u{1F418} <br>';

        // Ao usar \, temos sequências de escape
        // \n = nova linha
        // \t = tabulação
        // \\ = barra invertida
        // \$ = cifrão
        // \" = aspas duplas
        // \u{1F418} = emoji
    ?>

</body>
</html>