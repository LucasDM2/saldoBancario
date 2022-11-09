<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados bancários</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $("#salario").mask("000000000.00", {reverse: true})
        $("#divida").mask("000000000.00", {reverse: true})
        })
    </script>
</head>
<body>
    <header>
        <h1>Dados bancários do usuário.</h1>
    </header>
    <h2><?php echo $nome = $_POST["nome"]," ", $sobrenome = $_POST["sobrenome"] ?>, informe-nos algumas credenciais:</h2>
    <section>       
        <form action="saldo.php" method="post">
            <div>   
                Saldo da conta: 
                <input autocomplete="off" class="input" placeholder="Digite seu saldo." type="text" value="" name="salario" id="salario" required>
            </div>
            <div>
                Banco:
                <select required name="banco" autocomplete="off" id="banco">
                    <option value="" disabled selected>Selecione um banco:</option>
                    <option value="banco 'Caixa Econômica'"> Caixa Econômica</option>
                    <option value="'banco do Brasil'"> Banco do Brasil </option>
                    <option value="banco 'Itaú'"> Itaú </option>
                    <option value="banco 'Bradesco'"> Bradesco</option>
                    <option value="banco 'Santander'"> Santander</option>
                    <option value="banco 'Inter'"> Banco Inter</option>
                    <option value="banco 'HSBC'"> HSBC</option>
                    <option value="banco 'BNDES'"> BNDES</option>
                    <option value="banco 'Banrisul'"> Banrisul</option>
                    <option value="banco 'Sicredi'"> Sicredi</option>
                </select>
            </div>
            <div>
                Valor em dívidas:
                <input autocomplete="off" class="input" placeholder="Digite o valor de dívidas." type="text" value="" name="divida" id="divida" required>
            </div>
            <div>
                <input class="botao" type="submit" value="Enviar dados" value="">
            </div>
        </form> 
    </section>
</body>
</html>

<style>
    * {
        padding: 0;
        margin: 0;
        justify-content: center;
        align-items: center;
    }

    .input {
        width: 300px;
    }

    select {
        background-color: white;
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

    section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
    }
    
    form {
        font-family: arial;
    }

    form input, form textarea, form select {
        padding: 20px;
        width: 300px;
        border: 1px solid cornflowerblue;
        border-radius: 20px;
    }

    .botao {
        background-color: cornflowerblue;
        color: snow;
        width: 200px;
        cursor: pointer;
    }

    form div {
        display: flex;
        flex-direction: column;
        margin-bottom: 30px;
    }
</style>