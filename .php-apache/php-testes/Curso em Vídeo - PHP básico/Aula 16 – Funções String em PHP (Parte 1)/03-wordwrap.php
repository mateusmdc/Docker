<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $t = "aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da função wordwrap";
            $r = wordwrap($t, 5, "<br/>\n", true);
            echo $r; 
        ?>
    </div>
</body>
</html>