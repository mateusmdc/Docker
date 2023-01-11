<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $e = isset($_GET["estado"]) ? $_GET["estado"] : "Não informado";
            switch($e){
                case "AC":
                case "AM":
                case "AP":
                case "PA":
                case "RO":
                case "RR":
                case "TO":
                    $regiao = "Região Norte";
                    break;
                case "AL":
                case "BA":
                case "CE":
                case "MA":
                case "PB":
                case "PE":
                case "RN":
                case "PI":
                case "SE":
                    $regiao = "Região Nordeste";
                    break;
                case "DF":
                case "GO":
                case "MT":
                case "MS":
                    $regiao = "Região Centro-Oeste";
                    break;
                case "MG":
                case "ES":
                case "RJ":
                case "SP":
                    $regiao = "Região Sudeste";
                    break;
                case "PR":
                case "RS":
                case "SC":
                    $regiao = "Região Sul";
                    break;
            }
            echo "Você mora na $regiao<br/>";
        ?>
        <a href="exercicio-03.html">Voltar</a>
    </div>
</body>
</html>