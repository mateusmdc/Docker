<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 1;
            $mult = 0;

            echo "<h1>Analisando o número $n ...</h1><br/>";

            echo "<h3>Valores Múltiplos: ";

            for($div = 1; $div <= $n; $div++){
                if(($n%$div) == 0){
                    $mult++;
                    echo "$div ";
                }
            }

            $ehprimo = ($mult == 2) ? "É PRIMO!" : "NÃO É PRIMO!";

            echo "<br/>Total de Múltiplos: $mult</h3>";

            echo "<br/><h2>Resultado: $n " . $ehprimo . "</h2>";
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>