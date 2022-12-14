<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) / 2;
        echo "A soma vale: " . ($n1 + $n2);
        echo "</br> A subtração vale: " . ($n1 - $n2);
        echo "</br> A multiplicação vale: " . ($n1 * $n2);
        echo "</br> A divisão vale: " . ($n1 / $n2);
        echo "</br> O módulo vale: " . ($n1 % $n2);
        echo "</br> A média vale: " . $m;

        $n3 = $_GET["a"];
        $n4 = $_GET["b"];;
        echo "<h2>Valores recebidos: $n3 e $n4</h2>";
        $m2 = ($n3 + $n4) / 2;
        echo "A soma vale: " . ($n3 + $n4);
        echo "</br> A subtração vale: " . ($n3 - $n4);
        echo "</br> A multiplicação vale: " . ($n3 * $n4);
        echo "</br> A divisão vale: " . ($n3 / $n4);
        echo "</br> O módulo vale: " . ($n3 % $n4);
        echo "</br> A média vale: " . $m2;
        ?>
    </div>
</body>
</html>