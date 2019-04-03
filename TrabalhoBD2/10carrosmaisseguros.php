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

        <h3>Os 10 carros mais seguros avaliados pelo Latin NCAP e vendidos no Brasil.</h3>
<br /><br />
    Hatches, SUVs, picapes e sedãs: veja quais carros tem melhor capacidade de manter os ocupantes seguros em caso de acidente
    <br /><br />
    Ao comprar um carro, uma das primeiras perguntas é relacionada à sua segurança. É seguro para o motorista? E quanto aos passageiros? Os airbags são realmente eficientes? O que o carro oferece para prevenção de possíveis acidentes?
    <br /><br />
    Por isso, fizemos uma lista com os 10 carros que receberam as melhores notas nos testes do Latin NCAP – organização não-governamental que avalia veículos vendidos na América Latina e Caribe – e que são comercializados no Brasil.
    <br /><br />
    Para gerar os resultados, são feitos alguns testes de colisão – com impacto frontal a 64 km/h, lateral a 50 km/h e de poste a 29 km/h -, usando-se bonecos que simulam seres humanos (peso e estatura média, por exemplo).
    <br /><br />
    Desde 2016, também é levado em consideração para o resultado final se o modelo conta com elementos como controle eletrônico de estabilidade, alerta de cinto de segurança e ganchos de fixação para cadeirinhas infantis.
    <br /><br />

    As notas surgem levando-se em conta a capacidade do carro de manter os ocupantes seguros na cabine com o mínimo de ferimentos. Volkswagen T-Cross e Toyota Yaris foram os modelos mais recentes avaliados pelo programa.
    <br /><br />
    QUATRO RODAS aponta quais são os carros mais seguros que passaram pelo teste desde que o atual protocolo entrou em vigor, três anos atrás. Confira o ranking:
    <br /><br />
    10. Nissan Kicks<br />
    9. Toyota Yaris<br />
    8. Mitsubishi Eclipse Cross<br />
    7. Fiat Toro<br />
    6. Chevrolet Cruze<br />
    5. Toyota Corolla<br />
    4. Volkswagen T-Cross<br />
    3. Volkswagen Polo<br />
    2. Volkswagen Virtus<br />
    1.Volkswagen Golf<br /><br />

    <div class="col-md-6">

    <b>Deixe seu comentário</b>



    <textarea class="form-control" placeholder="O que você achou sobre este artigo" rows="5"></textarea> <br />
<form action="10carrosmaisseguros.php">
    <button class="btn btn-primary btn-md" type="submit">Enviar</button>
</div>
    </form>
<div class="col-md-6">
    <img  class="foto1" src="images/nissan.jpg";
</div>
</div>


<style>
    .texto1{
        font-family: 'Baloo Chettan', cursive;
    }
    .foto1{
        width: 600px;
        height: 450px;
    }



</style>
</body>
</html>
