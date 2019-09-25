<html>
    <head>
        <title>Ejercicio7</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num" required>
            <input type="submit">
        </form>

        <?php
            $num = $_GET['num'];
            while($num != 1){
                if($num % 2 == 0)
                    $num = $num/2;
                else
                    $num = ($num*3+1);
                echo $num.'<br>';
            }
           
        ?>
    </body>
</html>