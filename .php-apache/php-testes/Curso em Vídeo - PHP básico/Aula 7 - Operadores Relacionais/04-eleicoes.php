<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["an"];
            $idade = 2023 - $ano;
            echo "Quem nasceu em $ano tem $idade anos de idade <br/>";
            $tipo = ($idade>=18 and $idade <65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "Seu voto é $tipo";
        ?>
    </div>
</body>
</html>