<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "O valor enviado foi $valor <br/>";
            echo "A raíz quadrada de $valor é igual a " . number_format($rq,2);
        ?>
        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>
</html>