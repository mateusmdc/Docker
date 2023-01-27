<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $frase = "Eu vou estudar PHP agora";
            $cont = str_word_count($frase, 0);
            echo $cont;
            echo "<br/>";
            $cont = str_word_count($frase, 1);
            print_r($cont);
            echo "<br/>";
            $cont = str_word_count($frase, 2);
            print_r($cont);
            echo "<br/>";
        ?>
    </div>
</body>
</html>