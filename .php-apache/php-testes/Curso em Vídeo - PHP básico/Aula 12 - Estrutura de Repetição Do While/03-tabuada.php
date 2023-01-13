<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["numero"]) ? $_GET["numero"] : 0;
            $tab = 1;
            echo "<h1>Mostrando a Tabuada de $num</h1><br/>";
            if($num == 0){
                do{
                    echo "$num x $tab = " . ($num * $tab) . "<br/>";
                    $tab++;
                    }while($tab <= 10);
            }
            else{
                do{
                    echo "$num x $tab = " . ($num * $tab) . "<br/>";
                    $tab++;
                    }while($tab <= 10);
            }
        ?>
        <a href="03-index.php">Voltar</a>
    </div>
</body>
</html>