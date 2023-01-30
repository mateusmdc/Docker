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
                print_r($v);
                sort($v);
                print_r($v);
                rsort($v);
                print_r($v);
            ?>
            
        </pre>
    </div>
</body>
</html>