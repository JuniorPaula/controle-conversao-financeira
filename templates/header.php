<?php

    include_once("config/url.php");
    include_once("config/process.php");

    // limpa a messagem de sessão
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = "";
    }

    // url link active
    $url = basename($_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muito Dinherio | Casa de Câmbio</title>

    <!-- favoicon --> 
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $BASE_URL ?>assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $BASE_URL ?>assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $BASE_URL ?>assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?= $BASE_URL ?>site.webmanifest">

    <!-- css -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/styles.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <nav class="navbar">
			<div class="container-fluid justify-content-center">
				<a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
					<img src="<?php $BASE_URL  ?>assets/img/logo.png" width="50"  class="d-inline-block align-top" alt="">
				</a>
               <h4 class="text-uppercase"> Casa de Cambio Muito Dinheiro </h4>
			</div>
		</nav>
    </header>    
        <div class="container-fluid app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item mb-1 <?php if($url == 'index.php') echo "active";?>"><a href="<?= $BASE_URL ?>index.php">Cadastro</a></li>
						<li class="list-group-item <?php if($url == 'relatorios.php') echo "active";?>"><a href="<?= $BASE_URL ?>relatorios.php">Relatórios</a></li>
					</ul>
				</div>
                <div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							
				
  
