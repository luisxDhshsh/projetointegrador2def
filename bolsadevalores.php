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

<style>
    /* Defina o estilo para a tabela */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>

  <header>
        <a href="index.php"><h1 id="customizacao">StockLush</h1></a>

        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="ensinadosobrebolsa.php">Ensinando sobre a Bolsa de Valores</a></li>
                <li><a href="bolsadevalores.php">Bolsa de Valores</a></li>
            </ul>

        </nav>
        <button class="button-login"><a href="tela-login.php" class="cta">Entrar</a></button>
    </header>
   <table id="bolsa-de-valores">
    <tr>
      <th>Empresa</th>
      <th>Preço</th>
      <th>Variação</th>
    </tr>
  </table>

  <script>
    // Função para buscar e exibir dados da bolsa de valores
    function obterDadosBolsaValores() {
      // URL da API para obter dados da bolsa de valores
      var url = 'https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=IBM&interval=5min&apikey=demo'';

      // Usando fetch para buscar os dados da API
      fetch(url)
        .then(response => response.json())
        .then(data => exibirDadosBolsaValores(data))
        .catch(error => console.error(error));
    }

    // Função para exibir os dados da bolsa de valores na tabela
    function exibirDadosBolsaValores(data) {
      var tabela = document.getElementById('bolsa-de-valores');

      // Limpar a tabela
      tabela.innerHTML = '';

      // Preencher a tabela com os dados recebidos
      data.forEach(item => {
        var row = tabela.insertRow();

        var empresaCell = row.insertCell(0);
        empresaCell.innerHTML = item.empresa;

        var precoCell = row.insertCell(1);
        precoCell.innerHTML = item.preco;

        var variacaoCell = row.insertCell(2);
        variacaoCell.innerHTML = item.variacao;
      });
    }

    // Chamar a função para obter dados quando a página for carregada
    window.onload = obterDadosBolsaValores;
  </script>


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