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


    <h3 align="center">Passo a passo para aprender a dirigir</h3><br /><br />

    <b>Passo 1 – Se matricule em uma auto-escola.</b>
    <br /><br />
    O melhor é aprender com um bom profissional, já que parente pode perder a calma muito fácil, além do mais eles cuidam de toda a documentação. Mas antes mesmo dos 18 anos você pode começar a se interessar em conhecer mais o carro, perguntando e prestando atenção como as outras pessoas dirigem.
    <br /><br />
    <b>Passo 2 – Conheça o carro.</b>
    <br /><br />
    Quando você conhece o carro, muitos mitos e medos são vencidos. Com o carro totalmente parado e com freio de mão puxado, sente-se no banco do motorista e faça a regulagem de banco e todos os espelhos. Com o carro desligado, coloque o sinto e tente ensaiar como se você estivesse dirigindo e passando a marcha, da primeira até a quinta. Use a seta, o freio, a embreagem e o acelerador, e simule parar no sinal. Faça também reduções de marcha, da quinta para a quarta e vá sentindo como seria. Sempre olhando para frente e se errar, não fique chateada(o). Se você quiser fazer o barulho do motor com a boca, faça, não se ache boba(o) por causa disso.
    <br /><br />
    <b>Passo 3 – Ligar o carro</b>
    <br /><br />
    Procure um local calmo e sem carros, pessoas ou animais. Ao ligar o carro, coloque a marcha em ponto morto e com freio de mão puxado. E vire a chave com firmeza até ligar o carro e quando ligar solte a chave, se não vai fazer um barulho forte do motor de partida. Mas não tem problema se fizer barulho, apenas solte a chave. Se você voltar totalmente a chave você vai desligar o carro. Tenha o hábito de não ligar o carro com o pé na embreagem (a não ser que seja orientado assim pelo fabricante do carro como o HB20). É bom sempre ficar com o pé no freio para evitar que o carro se mova ao soltar o freio de mão.<br /><br />
    <b>Passo 4 – Saindo com o carro</b>
    <br /><br />
    Dica: O pé esquerdo é sempre usado na embreagem e o direito é usado para acelerar e frear.<br /><br />
    Pise na embreagem e coloque a primeira marcha. Suavemente acelere, mantenha a aceleração baixa e vá soltando bem devagar a embreagem. Se você tiver qualquer problema prelecione totalmente a embreagem, isso evita que o carro apague. Se o você estiver controlando bem a embreagem pode acelerar mais um pouco até que a embreagem esteja totalmente liberada e o carro estará em movimento.<br /><br />
    Cuidado apenas para não andar rápido demais, nesse momento você precisa controlar o carro, então sua velocidade deve ser entre 10 e 20 Km/h. Treine exaustivamente parar o carro e sair e por um dia treine apenas isso, antes de tentar seguir para a próxima etapa (segure a empolgação).<br /><br />
    <b>Passo 5 – Trocando as marchas</b><br /><br />

    Ao acelerar mais um pouco o carro começa a “pedir” marcha ou como se fosse engasgar, mas não é o ponto que o motor começa a “gritar”, é um pouco antes disso. Pressione totalmente a embreagem e passe para a segunda marcha e suavemente solte a embreagem e acelere um pouco, quase da mesma forma que você saiu com o carro.<br /><br />
    Procure ouvir o som do motor do carro, os carros mais novos são mais silenciosos e as vezes nem parece que está ligado, mas com prática você vai “sentir” o carro.<br /><br />
    Dica: Você sabia que é possível sair com o carro apenas com a embreagem? Simples! Pise na embreagem totalmente e engate a primeira. Muito suavemente (muito mesmo!) vá soltando a embreagem, mas não totalmente. Fique soltando levemente e pisando novamente. É um bom exercício para ter mais controle e sentir o carro.<br /><br />
    <b>Passo 6 – Parando o carro</b><br /><br />

    O carro tem uma coisa que se chama de freio-motor. Para usá-lo, com o carro em movimento, basta soltar o acelerador e o carro vai perdendo força. O que vai determinar se o carro vai parar rapidamente ou mais devagar é a marcha atual e a velocidade que você está andando.<br /><br />
    Agora que o carro está engatado, mas sem acelerar e está perdendo um pouco de velocidade, use o freio bem devagar para ir parando o carro. Quando o carro estiver quase totalmente parado, o motor vai querer apagar, pise totalmente na embreagem e continue pisando no freio bem devagar. O momento de pisar na embreagem antes do carro apagar é um pouco antes do carro ameaçar apagar. Com prática você vai aprender o momento exato.<br /><br />
    <b>Passo 7 – Engatar a marcha ré</b>
    <br /><br />

    Cada carro tem um sistema de marcha e você precisa saber como o seu carro funciona. Alguns a ré é para frente, outros para trás e outros ainda precisa pressionar algum comando na própria marcha.<br /><br />
    Com a marcha em ponto morto, pressione totalmente a embreagem e engate a ré. Da mesma forma que você saiu de primeira no Passo 4.<br /><br />
    Dica: Seja o carro. Sinta que o carro é uma extensão do seu corpo, procure perceber o tamanho e o espaço do carro na pista e diante dos obstáculos durante o trajeto<br /><br />




    <div class="col-md-6">

    <b>Deixe seu comentário</b>



    <textarea class="form-control" placeholder="O que você achou sobre este artigo" rows="5"></textarea> <br />
<form action="comodirigir.php">
    <button class="btn btn-primary btn-md" type="submit">Enviar</button>
</div>
    </form>
<div class="col-md-6">
    <img  class="foto1" src="images/drivesafe.jpg";
</div>
</div>


<style>
    .texto1{
        font-family: 'Baloo Chettan', cursive;
    }
    .foto1{
        border-radius: 15px;
        width: 550px;
        height: 450px;
    }



</style>
</body>
</html>
