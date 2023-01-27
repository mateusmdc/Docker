<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $frase = "Gosto de estudar Matemática!!! Matemática é muito legal!";
            $novaFrase = str_replace("Matemática", "PHP", $frase); // pode usar o str_ireplace pra ignorar caixa alta
            echo "$novaFrase";
        ?>
    </div>
</body>
</html>