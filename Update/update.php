<?php 

    include('../config.php');

    $id = $_GET['iduser'];
    
    if(isset($_POST['update'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data = $_POST['birthdate'];
        $email = $_POST['email'];
        $tel = $_POST['phone'];
        $senha = $_POST['pass'];

        $query = "UPDATE `user` SET `name`='$nome',`taxp`='$cpf',`birthdate`='$data',
        `email`='$email',`pass`='$senha',`phone`='$tel' WHERE id=$id";

        $result = mysqli_query($conn, $query);

       if ($result) {
        echo
        "
        <script>
            alert('Cadastro realizado com sucesso');
            document.location.href = '../home.php';
        </script>
        ";
       }else {
        echo mysqli_error($conn);
       }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardoso Agrovet</title>
    <link rel="stylesheet" href="update.css">
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
        <form id="box" action="" method="POST">
            <div id="All">
                <div id="register">ALTERAR CADASTRO</div>
                    <div>
                        <input type="text" name="nome" id="nameRegister" value="<?php echo $row['nome']?>" required>

                        <input type="text" name="cpf" id="tax" value="<?php echo $row['cpf']?>" required>

                        <br>
                        <label class="data" for="date">Data de nascimento</label><br>
                        <input class="data" type="date" name="birthdate" id="birthdate" placeholder="Data de Nascimento">
                        <br>
                        <input type="email" name="email" id="emailRegister" value="<?php echo $row['email']?>" required>
                        <input type="tel" name="phone" id="phoneRegister" value="<?php echo $row['tel']?>" required>
                        <input type="password" name="password" id="passwordRegister" placeholder="Senha" required>
                    </div>
                </div>
                <button name="register" type="submit" id="continueButton">CONCLUIR</button>
            </form>
    </div>
</body>
</html>