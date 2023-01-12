<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $ini = isset($_GET["v1"]) ? $_GET["v1"] : 0;
            $fim = isset($_GET["v2"]) ? $_GET["v2"] : 10;
            $inc = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

            if($ini < $fim){
                while($ini <= $fim){
                    echo $ini . " ";
                    $ini += $inc;
                }
            }
            elseif($ini > $fim){
                while($ini >= $fim){
                    echo $ini . " ";
                    $ini -= $inc;
                }
            }
            else{
                echo "Por favor digite um intervalo válido ou que o início não seja igual ao fim.";
            }
        ?>
        <br/><a href="03-parte1.html">Voltar</a>
    </div>
</body>
</html>