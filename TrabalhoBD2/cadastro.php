<?php

session_start();

?>
<html lang="pt">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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



    <div class="Cadastro">


        <h1 class="Texto_Login">Tela de Cadastro</h1>

            <br><br>

            <div class="form-group label-float">
                <input class="form-control" for="nome" placeholder="Digite seu nome" type="text" name="nome">
                <label>Nome:</label>
            </div>


            <div class="form-group label-float">
                <input class="form-control" placeholder="Digite sua senha" type="password" name="senha">
                <label>Senha:</label>
            </div>


            <div class="form-group label-float">
            <input class="form-control" placeholder="Digite seu email" type="email" name="email">
                <label>E-mail:</label>
            </div>

            <br /><p>Foto de exibição:</p>

            <input "  type="file" name="foto" /><br /><br />


            <form method="post" action="cadastrar.php">

            <br><button  type="submit" class="btn btn-primary btn-md">Cadastrar</button>
            <br>
        </form>

    </div>
</div>

</body>
</html>

<style>
    .Texto_Login{
        text-align: center ;
    }
    .label-float{
        position: relative;
        padding-top: 13px;
    }

    .label-float input{
        border: 1px solid lightgrey;
        border-radius: 5px;
        outline: none;
        min-width: 250px;
        padding: 25px 15px;
        font-size: 16px;
        transition: all .1s linear;
        -webkit-transition: all .1s linear;
        -moz-transition: all .1s linear;
        -webkit-appearance:none;
    }

    .label-float input:focus{
        border: 2px solid #3951b2;
    }

    .label-float input::placeholder{
        color:transparent;
    }

    .label-float label{
        pointer-events: none;
        position: absolute;
        top: calc(50% - 8px);
        left: 15px;
        transition: all .1s linear;
        -webkit-transition: all .1s linear;
        -moz-transition: all .1s linear;
        background-color: white;
        padding: 5px;
        box-sizing: border-box;
    }

    .label-float input:required:invalid + label{
        color: red;
    }
    .label-float input:focus:required:invalid{
        border: 2px solid red;
    }
    .label-float input:required:invalid + label:before{
        content: '*';
    }
    .label-float input:focus + label,
    .label-float input:not(:placeholder-shown) + label{
        font-size: 13px;
        top: 0;
        color: #3951b2;
    }

</style>





