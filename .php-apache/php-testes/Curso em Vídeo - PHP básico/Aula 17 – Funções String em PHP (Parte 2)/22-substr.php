<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $site = "Curso em vídeo";
            $sub = substr($site, 0, 5);
            echo "$sub";
            echo "<br/>";
            
            $sub2 = substr($site, 6);
            echo "$sub2";
            echo "<br/>";

            $sub3 = substr($site, -6);
            echo "$sub3";
            echo "<br/>";
            
            $sub4 = substr($site, -6, 2);
            echo "$sub4";
        ?>
    </div>
</body>
</html>