<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
        /* esse exercicio pretende demonstrar 
        o uso de operadores de incremento e decremento */
        $atual = $_GET["aa"]; // essa linha vai pegar o ano na URL
        echo "O Ano atual é $atual e o ano anterior é " . --$atual; # essa linha exibe o ano atual e decrementa 1 do ano atual
        echo $atual;

        
        ?>
    </div>
</body>
</html>