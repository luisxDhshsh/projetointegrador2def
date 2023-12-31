<?php
include('conta/protect.php');
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
    <script src='main.js'></script>

</head>

<body>

<?php include_once("componentes/navbar.html") ?>
<div class="follow-header">
    <div class="text-follow-header"><h1>Bem vindo de volta <?php echo $_SESSION['nome'];?></h1>
    <br>
    <div class="follow-header-in">
        <p>&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing 
            elit. Ut facilis assumenda qui recusandae, minus quas 
            obcaecati aliquid similique ea voluptas autem veritatis 
            accusantium hic architecto a, laboriosam, cum asperiores atque.</p>
            </div>
</div>
    
</div>

<div class="logout-box" style="color: white; display:flex; padding:3rem; gap:1rem;">
    <h4>Precisa dar um tempo?</h4>
    <button class="button-login" style="background-color:red; "><p>
        <a href="logout.php">Sair</a>
    </p></button>
</div>


<!-- FOOTER -->
<?php include_once("componentes/footer.html") ?>
     
</body>

</html>