<?php
include('protect.php');
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
    <script src='main.js'></script>

</head>

<body>

    <header class="header-index">
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


    <p>Bem vindo de volta <?php echo $_SESSION['nome']; ?></p>
<button><p>
    <a href="logout.php">Sair</a>
</p></button>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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