<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados bancários</title>
</head>
<body>
<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
        
?>
    <form action="saldo.php" method="post">
        <h1>Dados bancários</h1>
<?php
    echo "Olá $nome, informe-nos algumas credenciais."
?>
        <br>
        <br>
        <br>
        Saldo da conta:<br> 
        <input class="input" type="number" value="" name="saldo"><br>
        <br>
        Nome do banco:<br> 
        <input class="input" type="text" name="banco"><br>
        <br>
        Valor em dívidas:<br> 
        <input class="input" type="number" value="" name="dívidas"><br>
        <br>
        <input type="submit" value="Enviar dados" value="">
    </form> 
</body>
</html>

<style>
    .input {
        width: 200px;
    }
</style>