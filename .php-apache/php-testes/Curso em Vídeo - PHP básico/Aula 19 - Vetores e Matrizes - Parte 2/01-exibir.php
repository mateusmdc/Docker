<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array("A", "J", "M", "X", "K");
                $tot = count($v);
                echo "o vetor tem $tot elementos<br/>";
                print_r($v);
                var_dump($v);
            ?>
        </pre>
    </div>
</body>
</html>