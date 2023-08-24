<?php

if(!session_id()) session_start();

include('conta/conexao.php');
header('Content-Type: text/html; charset=utf-8');

if(isset($_SESSION['id'])){
    header('Location: minhaConta.php');
    die();
}
if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == null) {
        echo "<script type='text/javascript'>alert('O campo E-mail não pode estar em branco')</script>";
    } else if(strlen($_POST['senha']) == null) {
        echo "<script type='text/javascript'>alert('O campo Senha não pode estar em branco')</script>";
    } else{
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
    
                header("Location: minhaConta.php");
    
            } else {
                echo "<script type='text/javascript'>alert('Falha ao logar! E-mail ou senha incorretos')</script>";
            }
    }
}

?>

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
    <header>
        <a href="index.php"><h1 id="customizacao">SL</h1></a>

        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="ensinadosobrebolsa.php">Ensinando sobre a Bolsa de Valores</a></li>
                <li><a href="bolsadevalores.php">Bolsa de Valores</a></li>
            </ul>

        </nav>
        <button class="button-login"><a href="tela-login.php" class="cta">Entrar</a></button>
    </header>
    <div class="main-login">
            <div class="card-login">
                <div class="card-login-login">
                    <img src="assets/img/panda-login.png" alt="" width="100px">
                <h1>Entre em sua conta</h1>
                <p>Bem-vindo de volta </p>
                <form action="" method="post">
                <div class="textfield">
                    <label for="email"><br> Endereço de E-mail:</label>
                    <input type="text" name="email" placeholder="Insira seu e-mail">
                </div>
                <div class="textfield">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" placeholder="Insira sua senha">
                <p class="help-session-account" style="margin-top: 6px;">Ainda não tem uma conta? <a href="register.php" class="link-green">Registre-se</a></p>
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
                <button class="btn-login"><p>&nbsp; Entrar &nbsp;</p></button>
            </div>
                </form>
            <div class="textfield-google"><p>Faça login com o Google</p>
                <img src="assets/img/google.png" width="22px">
            </div>
            </div>
            
        </div>

    </div>


    <footer>
        <div class="footer-content">
            <h3>Stock Lush</h3>
            <p>O melhor site-escola para aprendizagem e simulação da bolsa de valores</p>
            <p>Entre em contato com nós</p>
            <ul class="socials">
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
        
    </footer>


    
  
</body>
</html>