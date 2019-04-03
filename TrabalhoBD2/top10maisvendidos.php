<?php

session_start();

$con = new PDO( "mysql:host=localhost; dbname=carros;charset=utf8", "root", "057425qwe");
if (!empty ($_POST) ){

    $sql = $con->prepare("INSERT INTO post (autor, ,mensagem,data) VALUE (?, ?) ");
    $sql->execute(array($_POST['autor'], $_POST['mensagem'] ));
}


?>
<html lang="pt">
<head>
    <title>Blog de carros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Blog de carros</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="top10maisvendidos.php">Top 10 carros mais vendidos</a></li>
                <li><a href="comodirigir.php">Como dirigir passo a passo</a></li>
                <li><a href="10carrosmaisseguros.php">Os 10 carros mais seguros</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span>Cadastrar</a></li>
                <li><a href="login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <li><a href="logout.php"<span class="glyphicon glyphicon-log-out"<span/> Logout</a></li>
            </ul>
        </div>
    </nav>

    <h3>Os top 10 carros mais vendidos do ano</h3>
    <br />
    <p>O Onix já começou o ano líder de vendas, e parece estender ainda mais esse reinado. <br/><br/>

        <b>Em crescimento</b><br/><br/>
        O Ford Ka assumiu a vice-liderança com a virada de ano, e o Volkswagen Polo agora aparece no top 5. Quem também vendeu bem e agora está no ranking dos 10 veículos mais vendidos é o Fiat Mobi, aparecendo na última posição. O Fiat ARgo também é visto novamente, depois de um período, no ranking. O modelo ocupa o oitavo lugar.
        <br/><br/>
        <b>Em queda</b><br/><br/>
        O Renault Kwid que até então figurava no top 5 de mais vendidos, com a virada de ano caiu e foi para a sexta posição. O Volkswagen Gol também caiu duas posições.
        <br/><br/>
    <div class="col-md-6">
        1º GM/ONIX 18.842<br/>
        2º FORD/KA 8.023<br/>
        3º HYUNDAI/HB20 7.249<br/>
        4º GM/PRISMA 6.924<br/>
        5º VW/POLO 5.433<br/>
        6º RENAULT/KWID 5.336<br/>
        7º VW/GOL 4.966<br/>
        8º FIAT/ARGO 4.920<br/>
        9º JEEP/RENEGADE 4.783<br/>
        10º FIAT/MOBI 4.413<br/></p>
    <b>Deixe seu comentário</b>



    <textarea class="form-control" placeholder="O que você achou sobre este artigo" rows="5"></textarea> <br />
    <form action="top10maisvendidos.php">
    <button class="btn btn-primary btn-md" type="submit">Enviar</button>
</div>
</form>
<div class="col-md-6">
    <img  class="foto1" src="images/onix2019.jpg";
</div>



<style>
    .texto1{
        font-family: 'Baloo Chettan', cursive;
    }
    .foto1{
        width: 700px;
        height: 550px;
    }



</style>
</body>
</html>
