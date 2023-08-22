<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>StockLush</title>
    <link rel="shortcut icon" href="assets/img/White_Gold_Simple_Icon_Attorney___Law_Logo-removebg-preview.png" type="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/style.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='assets/js/main.js'></script>
</head>

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
<div class="follow-header">
    <img src="assets/img/panda-login.png" alt="panda" width="400px">
    <div class="text-follow-header"><h1>Controle, veja e simplifique sua vida aqui</h1>
    <p><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Voluptatibus quia at itaque omnis nisi libero ipsum molestiae vitae veritatis, 
        maiores non quod, quos, facere in eveniet dolorum. Id, facilis inventore!</p>
    </div>
</div>

<div class="main-content">
    <img src="assets/img/bolsa-de-val.jpeg" width="450px">
    <h1>O melhor site de aprendizagem relacionada a bolsa de valores.</h1>
   
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
// Recuperando o contexto do canvas
// Recuperando o contexto do canvas
var ctx = document.getElementById('chart').getContext('2d');

// Função para buscar os últimos 10 valores do Bitcoin
function buscarDadosBitcoin() {
  // Fazendo uma requisição à API CoinDesk para obter os dados
  fetch('https://api.coindesk.com/v1/bpi/historical/close.json?start=2022-01-01&end=2022-01-10')
    .then(response => response.json())
    .then(data => {
      // Processando os dados recebidos
      var labels = Object.keys(data.bpi);
      var valores = Object.values(data.bpi);

      // Criando o gráfico de bolsa de valores
      var chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [{
            label: 'Valor do Bitcoin',
            data: valores,
            borderColor: 'red',
            fill: true
          }]
        },
        options: {
          // Configurações adicionais
        }
      });
    })
    .catch(error => {
      console.error('Erro ao buscar os dados:', error);
    });
}

// Chamando a função para buscar os dados e criar o gráfico
buscarDadosBitcoin();

    </script>
  
</body>
</html>