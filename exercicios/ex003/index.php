<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Estudando os Tipos Primitivos</h1>

    <p>
        <?php
            // TIPOS ESCALARES:
            // string
            // int
            // float
            // bool

            // Para int:
            // 0x = hexadecimal
            // 0b = binário
            // 0 = octal

            $v = (int) "300.02";
            // Coerção da string 300.02 para int
            $bin = 0b1010;
            $hex = 0x1A;
            $casado = true;

            echo "o valor da variável bin é $bin <br>";
            echo "o valor da variável hex é $hex <br>";
            echo "o valor da variável casado é $casado <br>";
            // echo de true retorna 1
            // echo de false retorna vazio

            var_dump($v);
            echo "<br>";
        ?>

        <?php 
            // TIPOS COMPOSTOS:
            // array
            // object

            $arr = [2, 4.3, false, 6, "renato", [1, 2, 3]];
            var_dump($arr);

            class Pessoa {
                private string $nome = "Vitor";
            }

            $p = new Pessoa;
            var_dump($p);
        ?>
    </p>
</body>
</html>
