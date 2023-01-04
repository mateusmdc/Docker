<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM" : "NÃO";
            echo "As variáveis A e B são iguais? $r <br/>";
            $_r = ($a === $b) ? "SIM" : "NÃO";
            echo "As variáveis A e B são identicas? $_r";

        ?>
    </div>
</body>
</html>