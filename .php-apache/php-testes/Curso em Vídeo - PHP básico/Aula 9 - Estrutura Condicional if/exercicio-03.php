<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
        $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
        $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
        $media  = ($n1+$n2)/2;

        echo "A média entre $n1 e $n2 é igual a $media </br>";

        if($media < 5)
            $situacao = "REPROVADO";
        elseif($media >= 5 && $media < 7)
            $situacao = "RECUPERAÇÃO";
        else
            $situacao = "APROVADO";
        
        echo "Situação do Aluno: $situacao </br>";
        ?>
    </div>
</body>
</html>