<html>
    <head>
        <title>Ejercicio9</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num" required>
            <input type="submit">
        </form>

        <?php
            $importe = $_GET['num'];
            if($importe < 10000)
                echo $importe + ($importe*0.05);
            elseif($importe < 20000)
                echo $importe + ($importe*0.08);
            elseif($importe < 40000)
                echo $importe + ($importe*0.1);
            else
                echo $importe + ($importe * 0.13);
        ?>
    </body>
</html>