<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            function soma(){
                $p = func_get_args();
                $total = func_num_args();
                $s = 0;
                for($i = 0; $i < $total; $i++){
                    $s += $p[$i];
                }
                return $s;
            }

            $res = soma(3,5,2,8,9,4);
            echo "A soma dos valores é $res";
        ?>
    </div>
</body>
</html>