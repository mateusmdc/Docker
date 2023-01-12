<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $d = 20;

            do{
                echo "$d ";
                $d -= 2;
            }while($d >= 0);
            echo "<br/>";
        ?>
    </div>
</body>
</html>