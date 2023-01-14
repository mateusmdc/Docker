<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <form method="get" action="03-tabuada.php">
            <label for="inum">Número: </label>
            <select name="numero" id="inum">
                <?php
                    $opt = 1;
                    do{
                        echo "<option value=$opt>$opt</option>";
                        $opt++;
                    }while($opt <= 10)
                ?>                
                <input type="submit" value="Tabuada"/>
        </form>
    </div>
</body>
</html>