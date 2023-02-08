<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        //comando para mudar a data/hora para SP
        date_default_timezone_set("America/Sao_Paulo"); //GMT-03
        echo "Hoje é dia " . date("d/M/Y");
        echo "<br>E a hoje atual é " . date("G:i:s T");
    ?>
</body>
</html>
