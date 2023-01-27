<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $nome = "Mateus";
            $novo = str_pad($nome, 30, "_", STR_PAD_LEFT);
            print("O namorado da Ortência, $novo, é lindo!");
            
        ?>
    </div>
</body>
</html>