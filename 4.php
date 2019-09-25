<html>
    <head>
        <title>Ejercicio4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="text" name="word">
            <input type="submit">
        </form>
         
        <?php
            $text = $_GET['word'];
            $reverseText = strrev($text);    
            if($text == $reverseText){
                echo $text.' es palíndromo';
            }else{
                echo $text.' no es palíndromo';
            }
        ?>
    </body>
</html>