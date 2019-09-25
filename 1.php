<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
            <?php 
                $puertas = ['A','B','C','D'];
                for($i = 1 ; $i <= 5 ; $i++){
                    echo '<h5>Piso '.$i.'</h5><div style="display: grid; grid-template-columns:auto auto auto auto">';
                    for($x = 0; $x < sizeof($puertas); $x++){
                        echo '<p>'.$i.$puertas[$x].'</p>';
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </body>
</html>