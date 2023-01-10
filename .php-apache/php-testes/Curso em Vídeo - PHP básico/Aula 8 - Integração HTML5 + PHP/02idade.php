<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0 ; "[sem sexo";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos de idade";
        ?>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>
</html>