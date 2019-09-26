<html>
    <head>
        <title>Ejercicio10</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num" required>
            <select name="tipoCompra">
                <option value="mascota">Mascota</option>
                <option value="ropa">Ropa</option>
            </select>  
            <input type="submit">
        </form>

        <?php
            $total = intval($_GET['num']);
            $tipo = intval($_GET['tipoCompra']);
            
            if($total < 19){
                if($tipo == 'mascota')
                    echo 'No se pudo enviar';
                else
                    echo 'Gastos de envio: 9€.<br>Precio: '. $total*1.21 + 9 .'€';
            }elseif ($total < 40) {
                echo 'Gastos de envio: 9€ <br>Precio:';
                if($tipo == 'mascota')
                    echo $total*1.10 + 9 .'€';
                else
                    echo $total*1.21 + 9 .'€';
            }elseif ($total > 80) {
                echo 'Gastos de envío gratis <br>Precio:';
                if($tipo == 'mascota')
                    echo $total*1.10 .'€';
                else
                    echo $total*1.21 .'€';
            }
        ?>
    </body>
</html>