
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>StockLush</title>
    <link rel="shortcut icon" href="assets/img/panda-login.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='assets/js/main.js'></script>
</head>
<body>
<?php include_once("componentes/navbar.html") ?>
    <div class="main-login">
            <div class="card-login">
                <div class="card-login-login">
                    <img src="assets/img/panda-login.png" alt="" width="100px">
                <h1>Crie uma conta</h1>
                <p>Seja bem-vindo :) </p>
                    <form action="" method="post">
                            <div class="textfield">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" placeholder="Insira seu nome">
                            </div>
                            <div class="textfield">
                                <label for="email">Endereço de E-mail:</label>
                                <input type="text" name="email" placeholder="Insira seu e-mail">
                            </div>
                            <div class="textfield">
                                <label for="senha">Senha:</label>
                                <input type="password" name="senha" placeholder="Insira sua senha">
                                <br>
                            </div>
            <div class="help-session-evolve">
                <div class="help-session">
                    <a href="#">Esqueceu a senha?</a>
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Lembrar-me</label>
                </div>
            </div>
            <div class="textfield-btn">
                <a href="login.php"><button class="btn-login"><p>&nbsp; Criar Conta &nbsp;</p></button></a>
            </div>
            </form>
            <div class="textfield">
                <p class="help-session-account">Já tem uma conta? <a href="tela-login.php" class="link-green">Entre</a></p>
            </div>
            </div>
        </div>

    </div>

<!-- FOOTER -->
<?php include_once("componentes/footer.html") ?>
     


</body>
</html>