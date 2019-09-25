<html>
    <head>
        <title>Ejercicio Funciones</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num1" required>
            <select name="operation">
                <option value="sumar">+</option>
                <option value="multiplicar">*</option>
            </select>
            <input type="number" name="num2" required>
            <input type="submit">
        </form>

        <?php
            function math($func, $num1, $num2){
                return $func($num1,$num2);
            }
            function sumar($num1, $num2){
                return $num1+$num2;
            }
            function multiplicar($num1, $num2){
                return $num1*$num2;
            }
           
            echo math($_GET['operation'],$_GET['num1'],$_GET['num2']);            
        ?>
    </body>
</html>