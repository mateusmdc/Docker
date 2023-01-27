<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $frase = "Estou aprendendo PHP no curso em vídeo de PHP";
            $cont = substr_count($frase, "PHP");
            print "PHP encontrado $cont vezes";
        ?>
    </div>
</body>
</html>