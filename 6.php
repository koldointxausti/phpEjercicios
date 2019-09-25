<html>
    <head>
        <title>Ejercicio6</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="potencia" placeholder="Potencia" required>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <input type="submit">
        </form>

        <?php
            $potencia = $_GET['potencia'];
            $cantidad = $_GET['cantidad'];
            
            for($i = 1; pow($i,$potencia) < $cantidad ; $i++)
                echo $i.' ^ '.$potencia.' = '.pow($i, $potencia).'<br>';
        ?>
    </body>
</html>