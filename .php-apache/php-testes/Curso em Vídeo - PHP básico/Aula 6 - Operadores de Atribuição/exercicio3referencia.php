<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variável A vale $a";
        echo "<br/>A variável B vale $b";

        $c = 3;
        $d = &$c;
        $d += 5;
        echo "<br/>A variável C vale $c";
        echo "<br/>A variável D vale $d";
        
        ?>
    </div>
</body>
</html>