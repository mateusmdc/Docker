<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
        $x = "abc";
        $$x ="def";
        echo "O conteudo da variavel X é: $x";
        echo "<br/>A variavel ABC criada recebeu o valor: $abc";
        ?>
    </div>
</body>
</html>