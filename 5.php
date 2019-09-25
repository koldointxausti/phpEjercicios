<html>
    <head>
        <title>Ejercicio5</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="altura" placeholder="Altura (cm)" min="70" max="180" required>
            <input type="number" name="edad" placeholder="Edad" min="0" max="100" required>
            <input type="radio" name="acompañado" value="0">
            <label for="acompañado">Menor acompañado</label>
            <input type="submit">
        </form>

        <?php
            $altura = $_GET['altura'];
            $edad = $_GET['edad'];
            if(($edad >= 10 | $altura >= 120)|($edad >= 6 && $acompañado == 0)){
                echo 'Puede pasar';
            }else{
                echo 'No puede pasar';
            }
        ?>
    </body>
</html>