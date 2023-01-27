<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Vídeo";
            $texto = implode("#", $vetor); // pode trocar implode por join
            print($texto);
        ?>
    </div>
</body>
</html>