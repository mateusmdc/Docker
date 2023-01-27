<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "$frase <br/>A string foi encontrada na posição $pos";
        ?>
    </div>
</body>
</html>