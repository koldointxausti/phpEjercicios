<html>
    <head>
        <title>Ejercicio include</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            echo "Una $fruta $color <br>";
            include_once 'include1-vars.php';
            echo "Una $fruta $color <br>";
            $fruta = "pera";
            $color = "amarilla";
            include_once 'include1-vars.php';
            echo "Una $fruta $color <br>";
        ?>
    </body>
</html>