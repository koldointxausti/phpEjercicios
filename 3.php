<html>
    <head>
        <title>Ejercicio3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num" max=100 min=1>
            <input type="submit">
        </form>
         
        <?php
            if(isset($_GET['num'])){
                echo 'Tu número ';
                $edad = $_GET['num'];
                if($edad < 10)
                echo "está entre 0-9";
                elseif($edad < 20)
                    echo "está entre 10-19";
                elseif($edad < 30)
                    echo "está entre 20-29";
                elseif($edad < 40)
                    echo "está entre 30-39";
                elseif($edad < 50)
                    echo "está entre 40-49";
                elseif($edad < 60)
                    echo "está entre 50-59";
                elseif($edad < 70)
                    echo "está entre 60-69";
                elseif($edad < 80)
                    echo "está entre 70-79";
                elseif($edad < 90)
                    echo "está entre 80-89";
                elseif($edad < 100)
                    echo "está entre 90-99";
                else
                    echo "es mayor que 100";
            }else{
                echo "Introduce un número.";
            }
            
        ?>
    </body>
</html>