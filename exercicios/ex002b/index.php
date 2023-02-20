<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Testando Variáveis e Constantes</h1>
    <p>
        <?php
            // Regras para nomes de variáveis:
            // 1. Variáveis começam com $.
            // 2. O segundo caractere deve ser uma letra ou um underscore.
            // 3. Aceita-se letras, números e underscores.
            // 4. Aceita caracteres da tabela ASCII a partir de 128.
            // 5. A linguagem é case sensitive.
            // 6. Nomes especiais ($this, $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST, $_ENV) não podem ser usados.
            $nome = "Vitor";
            $sobrenome = "George";  // string
            $idade = 19;  // int
            $peso = 80.1;  // float
            $casado = true;  // bool
            // @see https://www.youtube.com/watch?v=H7w_wK_t4uI

            echo "O meu nome é $nome $sobrenome <br>";
        ?>
    </p>
    <p>
        <?php
            // Constantes são escritas em maiúsculo
            // Elas não podem ser mudadas.
            const PAIS = "Brasil";
            echo "Eu moro no " . PAIS ;
        ?>
    </p>
</body>
</html>
