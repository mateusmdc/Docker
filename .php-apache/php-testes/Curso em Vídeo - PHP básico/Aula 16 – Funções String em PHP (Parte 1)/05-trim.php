<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $nome = "   José da Silva   ";
            echo strlen($nome);
            echo "<br/>";
            $novo = trim($nome);
            echo $novo;
            echo "<br/>";
            echo strlen($novo);
        ?>
    </div>
</body>
</html>