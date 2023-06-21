<?php
if(!session_id()) session_start();

include('conexao.php');
header('Content-Type: text/html; charset=utf-8');

if(isset($_SESSION['id'])){
    header('Location: minhaConta.php');
    die();
}
if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == null) {
        echo "O campo e-mail não pode estar em branco";
    } else if(strlen($_POST['senha']) == null) {
        echo "O campo senha não pode estar em branco";
    } else if(strlen($_POST['email']) == $email) {
        echo "O E-mail já esta cadastrado";
    }
        else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "INSERT INTO usuarios WHERE email = '$email' AND senha = '$senha'";
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
                echo "Falha ao logar! E-mail ou senha incorretos";
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
    <link rel="shortcut icon" href="assets/img/White_Gold_Simple_Icon_Attorney___Law_Logo-removebg-preview.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
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


    
  
</body>
</html>