<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo</title>
</head>
<body>
    <?php
        $saldo = $_POST["saldo"];
        $dívidas = $_POST["dívidas"];
        $resultado = ($saldo - $dívidas);

        if ($resultado > 0) {
            echo "Ainda restará dinheiro em sua conta, totalizando $resultado";
        }
        else if (($resultado) == 0) {
            echo "Após quitar sua dívida, não restará nada em sua conta";
        }
        else {
            echo "O saldo da sua conta ficará negativo, resultando numa dívida de $resultado";
        }
    ?>
</body>
</html>