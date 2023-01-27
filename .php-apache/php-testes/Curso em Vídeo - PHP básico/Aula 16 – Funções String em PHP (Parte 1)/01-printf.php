<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $p = "Leite";
            $pr = 4.5;
            //echo "o $p custa R$ $pr";
            printf ("O %s custa R$ %.2f", $p, $pr);
        ?>
    </div>
</body>
</html>