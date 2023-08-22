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
    <div class="follow-header">
        <img src="assets/img/White Gold Simple Icon Attorney & Law Logo.png" alt="logo" width="400px" class="logo">
        <div class="text-follow-header"><h1>Controle, veja e simplifique sua vida aqui</h1>
        <p><br>Bem-vindo ao nosso site! Aqui você encontrará uma introdução completa sobre a bolsa de valores, um mercado financeiro dinâmico e repleto de oportunidades. </p>
        <br>
        <div class="follow-header-in" style="margin-left: 3%;">
         
            </div>

    </div>
    </div>


    <div class="main-content">
        
    <img src="assets/img/bolsa-de-val.jpeg" width="450px" height="100%">
        <div>

        <h2 >O que é a bolsa de valores?</h2>
        <br>
        <p>&nbsp; A bolsa de valores é um ambiente onde ocorrem negociações de diversos ativos financeiros,
             tais como ações de empresas, títulos de dívida, mercadorias e derivativos. É por meio desse
              mercado que empresas conseguem captar recursos ao venderem ações, o que impulsiona seu 
              crescimento, e investidores têm a chance de adquirir essas ações e se tornarem sócios das 
              empresas, com a possibilidade de obter lucros por meio da valorização das ações e 
              distribuição de dividendos.</p>  
        
        <br>
        <div class="follow-header-in">
              <h2 >Participar da bolsa de valores</h2>
        <br>
        <p>&nbsp; Para participar da bolsa de valores, é necessário abrir uma conta em uma 
            corretora autorizada. Essas instituições financeiras fornecem acesso às plataformas
             de negociação, por onde os investidores podem enviar ordens de compra ou venda de
              ativos. As ordens são executadas eletronicamente, levando em consideração a oferta
               e a demanda existentes.</p> 
        
<br>

    
               </div>
               
               </div>
               
    </div>
    <div class="follow-header">
        <div>
    <h2 >Participar da bolsa de valores</h2>
        <br>
        <p>&nbsp; Para participar da bolsa de valores, é necessário abrir uma conta em uma 
            corretora autorizada. Essas instituições financeiras fornecem acesso às plataformas
             de negociação, por onde os investidores podem enviar ordens de compra ou venda de
              ativos. As ordens são executadas eletronicamente, levando em consideração a oferta
               e a demanda existentes.</p>  
               </div>
               <img src="assets/img/bolsa-de-val2.jpeg" width="450px" height="100%">
               </div>
               <canvas id="chart"></canvas>


               
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