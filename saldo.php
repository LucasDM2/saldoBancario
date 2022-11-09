<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo</title>
</head>
<body>
    <header>
        <h1>Saldo após quitação das dívidas. <?php $resultado ?></h1>
    </header>
    <section> -->
    <?php
        $salario = (float) $_POST["salario"];
        $divida = (float) $_POST["divida"];
        $resultado = ($salario - $divida);
        $banco = $_POST["banco"];

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        // $nome = $_POST["nome"];

        if ($resultado > 0) {
            echo 'a';
            echo "<script>alert('Após quitar sua dívida com o " . $banco . ", o saldo da sua conta ficará negativo, resultando numa dívida de R$');window.location.href='informacoesPessoais.php';</script>";
            // echo "Após quitar sua dívida com o $banco, ainda restará dinheiro em sua conta, totalizando R$";
            // echo number_format($resultado,2,",","."), "."; 
        }
        else if (($resultado) == 0) {
            echo 'b';
            echo "<script>alert('Após quitar sua dívida com o " . $banco . ", o saldo da sua conta ficará negativo, resultando numa dívida de R$')</script>";
            // echo "Após quitar sua dívida com o $banco, não restará nada em sua conta.";
        }
        else {
            // echo 'alert(\'Após quitar sua dívida com o ' . $banco . ', o saldo da sua conta ficará negativo, resultando numa dívida de R$\')';
            echo "<script>alert(\"Após quitar sua dívida com o , o saldo da sua conta ficará negativo, resultando numa dívida de R$\")</script>";
            // echo number_format($resultado,2,",","."), "."; 
        }
        
    ?>
    <!-- </section>
</body>
</html>

<style>
    body {
        padding: 0;
        margin: 0;
        justify-content: center;
        align-items: center;
        background-color: cornflowerblue;
    }

    header {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background-color: cornflowerblue;
        color: snow;
        font-family: Cambria, Arial;
    }

    section{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border: 300px solid cornflowerblue;
        border-radius: 2px;
        font-size: 28px;
        color: snow;
    }

</style> -->