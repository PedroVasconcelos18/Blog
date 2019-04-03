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

    <h3 align="center" >Introdução</h3>
     <br />
<p class="paragrafo">Bem vindo ao nosso blog, neste site temos o intuito de te aproximar sobre carros, o dia-a-dia deles e como funcionam, as atualizações gerais, os recordes, espero que goste.</p>
<br /> <br />
    <h3>Para que sua imersão ao nossa site seja de forma espetácular, segue algumas curiosidades sobre carros:</h3><br />
    <b>1 – Qual o carro mais caro do mundo?</b>
    <br/><br/>
    O carro mais caro do mundo, segundo a revista Forbes, é o modelo Aston Martin MA-RB 00, avaliado em US$ 3.900.000. Serão vendidas apenas 150 unidades no mundo todo. Outros 25 são produzidos apenas para corridas. Os carros já começaram a ser entregues neste ano e estão sendo feitos pela Fórmula 1 Red Bull Racing. As informações técnicas sobre o veículo não foram passadas para a imprensa.
    <br/><br/>
    <b>2 – Qual o carro mais barato do mundo?</b>
    <br/><br/>
    Este posto vem sendo vencido pelo Tata Nano praticamente desde o seu lançamento, ocorrido em 2008, na Índia. Um carro 0 km deste modelo sai por menos de R$ 10 mil. Mesmo barato, não faz muito sucesso com o seu motor de 38 cavalos.
    <br/><br/>
    <b>3 – Qual foi o maior engarrafamento do mundo?</b>
    <br/><br/>
    O maior congestionamento do mundo teria ocorrido na China, em 2010. O trânsito ficou parado por cerca de 12 dias. Dá para imaginar o tamanho da confusão?
    <br/><br/>
    <b>4 – Quanto tempo demora para um carro ser montado?</b>
    <br/><br/>
    A indústria automobilística vem se aprimorando cada vez mais. Tudo mudou com Henry Ford, que iniciou um movimento chamado Fordismo, com a implantação da linha de montagem, padronizando a produção de veículos no mundo. De lá para cá, a produção não para de ficar mais rápida. Atualmente, o tempo médio estimado para um carro ficar pronto é de 12 horas. Em nível de comparação, na década de 30, um carro levava cerca de 40 horas para ficar pronto!
    <br/><br/>
    <b>5 – Qual o carro mais rápido do mundo?</b>
    <br/><br/>
    O carro mais veloz do mundo é o modelo Venom GT da Hannessey. Seu preço é de US$ 1.2 milhões. Sua velocidade pode chegar a 435,3 km/h. Esse superesportivo é uma peça para poucos!
    <br/><br/>
    <b>6 – A maior multa de trânsito da história</b>
    <br/><br/>
    Na Suíça, infringir a lei de trânsito pode sair muito caro, dependendo do quanto você é rico. É porque no país a multa vai corresponder ao tamanho da renda do infrator. No caso, o cidadão que corria a cerca de 290 km/h, teve que pagar aproximadamente US$ 1 milhão.
    <br/><br/>
    <b>7 – Ferrari: preço alto com baixa produção!</b>
    <br/><br/>
    A Ferrari pode se dar ao luxo de fabricar bem menos e cobrar mais caro, não é mesmo? Estima-se que a fábrica monte 14 carros por dia. Tudo bem, pois o processo de composição de cada peça é bem mais delicado.
    <br/><br/>
    <b>8 – Toyota, a líder de fabricação!</b>
    <br/><br/>
    Já a montadora japonesa se destaca por uma elevada produção diária de veículos. A gigante é capaz de montar 13 mil carros por dia. O sistema de produção da Toyota também foi revolucionário no mercado de veículos e é conhecido como Toyotismo, substituindo o Fordismo depois dos anos 70, com uma produção adequada à demanda do mercado e com a automatização de todas as etapas de produção e mão de obra qualificada.
    <br/><br/>
    <b>9 – Quais foram os itens de segurança primários em um veículo?</b>
    <br/><br/>
    O primeiro retrovisor foi instalado em um carro em 1906, assinado pelo criativo Alfred Faucher, um francês apaixonado por veículos. Já o para-choque, item que também se tornou indispensável, assim como o retrovisor nos modelos atuais, teria sido instalado ainda antes, em 1897, na República Tcheca. Pouco tempo depois, Frederick Simms, um inglês, colocou o para-choque definitivo, feito com estrutura emborrachada, em 1905.</p>
    <hr>

    <h3 align="center">Direção elétrica ou hidráulica, qual é a melhor?</h3>
<br /><br />
    <p>Durante dezenas de anos só existia o sistema hidráulico para reduzir o esforço exigido pelo volante. De uns anos pra cá o hidráulico foi sendo substituído pelo sistema elétrico. Hoje existem os dois: a direção hidráulica e a direção elétrica. Qual é a melhor?
        <br /><br />
        Sem nenhuma dúvida a elétrica, pois a hidráulica é um sistema complexo com correia, bomba de óleo, fluido, mangueira, pra deixar a direção mais leve. Já a elétrica se restringe praticamente a um motorzinho elétrico acoplado a coluna de direção. O resultado na prática é o mesmo, mas o elétrico tem duas grandes vantagens: em primeiro lugar, praticamente não exige manutenção, ao contrário da hidráulica. Além disso, reduz o consumo, pois a hidráulica rouba potência o tempo todo, enquanto a elétrica só quando se vira o volante.
        <br /><br />
<img class="foto1" src="images/blog.jpg">

</div>
<style>
    .paragrafo{
        font-size: 23px;
    }
    .foto1{
        width: 1150px;
        height: 550px;
        border-radius: 15px;
    }


</style>
</body>
</html>
