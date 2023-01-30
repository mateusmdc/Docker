<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array("nome" => "Ana", 
                            "idade" => 23,
                            "peso" => 65.5);
                foreach($v as $key => $c){
                    echo "o campo $key possui o conteúdo $c <br/>";
                }
            ?>
        </pre>
    </div>
</body>
</html>