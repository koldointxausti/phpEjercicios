<html>
    <head>
        <title>Ejercicio8</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num" required>
            <input type="submit">
        </form>

        <?php
            $num = $_GET['num'];
            if($num % 2 != 0){
                for($i=1; $i<=((floor($num))+1); $i+=2){
                    for ($ws = 0 ; $ws < $num - $i ; $ws++)
                        echo '&nbsp';
                    for($x = 1; $x <= $i; $x++){
                        echo '&nbsp *';
                    }
                    echo'<br>';
                }
            }else
                echo 'Solo pueden introducirse números impares';
        ?>
    </body>
</html>