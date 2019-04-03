<?php

session_start();

$nome = $_SESSION['nome'];
$foto = $_SESSION['foto'];
$senha = $_SESSION['senha'];
$email = $_SESSION['email'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carros";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (id, nome, foto, senha, email)
    VALUES (NULL, '$nome', '$foto', '$senha', '$email')";

    $conn->exec($sql);
    echo "Novo usuario cadastrado";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>







