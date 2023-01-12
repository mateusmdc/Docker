<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $c = 0;
            do{
                echo "$c ";
                $c += 2;
            }while($c <= 20);
            echo "<br/>";
        ?>
    </div>
</body>
</html>