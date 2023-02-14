
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENDEREÇO</title>
    <link rel="stylesheet" href="deliveryAdress.css">
</head>
<body>
    <nav id="navBar">
        <a href="" class="logo">CARDOSO <b style="background-color: #FF6500; border-radius: 4px; padding: 3px;">AGROVET</b></a>
        <ul> 
            <li><img src="/images/icons/perfil.png" alt="" class="personIcon"></li>
            <div id="loginIcons">
                Faça <b>LOGIN</b><br>
                ou faça seu <b>CADASTRO</b>
            </div>
        </ul>
    </nav>
    <div id="main" >
        <form id="box" action="process.php" method="POST">
            <div id="All">
                <div id="register">ENDEREÇO DE ENTREGA</div>
                    <div>
                        <input type="text" name="CEP" id="cep" placeholder="CEP" required>
                        <input type="text" name="street" id="street" placeholder="Rua" required>
                        <input type="number" name="number" id="number" placeholder="Número" required>
                        <input type="text" name="area" id="area" placeholder="Bairro" required>
                        <input type="text" name="city" id="city" placeholder="Cidade" required>
                        <input type="text" name="state" id="state" placeholder="Estado" required>
                    </div>
                <button type="submit" id="continueButton">Continue</button>
            </div>
        </form>
    </div>
    <footer>
        Cardoso Agrovet  © 2022 - Todos os direitos reservados<br>
        Rua Alexandre Ferreira, 48 - Barão de Camaçari, Catu CEP: 48110-000 - CNPJ: 47.845.005/0001-89
    </footer>
    
</body>
</html>