<?php
/**
 * Created by PhpStorm.
 * User: 21800502
 * Date: 14/03/2019
 * Time: 11:32
 */


session_start();

$con =  new PDO("mysql:host=localhost; dbname=carros","root","057425qwe");
$sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
$sql->execute( array($_POST['email'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um único registro

// Se o usuário foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: ../TrabalhoBD2/index.php");
}else{
    header("Location: ../TrabalhoBD2/login");
}

?>