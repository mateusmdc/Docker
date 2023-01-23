<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            function teste(&$x){
                $x += 2;
                echo "<p>o valor de x é: $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>o valor de a é: $a</p>"
        ?>
    </div>
</body>
</html>