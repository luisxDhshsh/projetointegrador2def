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
        echo "O campo e-mail não pode estar em branco";
    } else if(strlen($_POST['senha']) == null) {
        echo "O campo senha não pode estar em branco";
    } 
//else if(strlen($_POST['email']) == ) {
//   echo "<script type='text/javascript'>alert('O E-mail já esta cadastrado')</script>";
// }
        else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_iconta = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
        $sql_fconta = mysqli_query($mysqli, $sql_iconta);
      
    }
    header("Location: tela-login.php");
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

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Visite-nos</h1>
                <p></p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <img src="assets/img/instagramico.png" class="social-footer">
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <img src="assets/img/facebookico.png" class="social-footer">
                    </a>

                    <a href="#" class="footer-link" id="twitter">
                        <img src="assets/img/twitterico.png" class="social-footer">
                    </a>

                    <a href="#" class="footer-link" id="discord">
                        <img src="assets/img/discordico.png" class="social-footer">
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>E-mail:</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">stocklush</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Adventures</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Music</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Products</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="footer-link"></a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Inscreva-se</h3>

                <p>
                    Digite seu e-mail para fazer parte de nossa comunidade
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2023 Todos os direitos reservados
        </div>
    </footer>
     


    
  
</body>
</html>