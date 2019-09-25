<html>
    <head>
        <title>ejercicio 2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num1">
            <input type="number" name="num2">
            <input type="number" name="num3">
            <input type="submit">
        </form>

        <?php
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];
            echo max('El número más alto introducido es: '.$num1,$num2,$num3);
        ?>

    </body>
</html>