<?php

require_once "funcoes.php";
require_once "../configuracoes/base_dados.php";

$logged_user = false;

if(isset($_POST["user"]) && isset($_POST["pass"])){

    $name = $_POST["user"];
    $pass = $_POST["pass"];

    $logged_user = login($name, $pass);

    if($logged_user){
        header("Location: inicio.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Backoffice - Sebastião Alves</title>
</head>
<body>

    <div class="box">
        <h3>Backoffice - Sebastião Alves <?= date("Y"); ?></h3>
    </div>

    <div class="box" style="padding: 10px 0px">
        <h5>Login</h5>
        
        <?php if(!$logged_user && isset($_POST["user"]) && isset($_POST["pass"])): ?>
            <p style="color: red">Login inválido, tente novamente.</p>
        <?php endif; ?>
        
        <form action="" method="post" style="height: 100px">
            <input type="text" name="user" placeholder="Nome" required="required">
            <br><br>
            <input type="password" name="pass" placeholder="Senha" required="required">
            <br><br>
            <input type="submit" value="Entrar" class="botao">
        </form>
    </div>
    
</body>
</html>