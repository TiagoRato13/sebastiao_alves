<?php

require_once "funcoes.php";

if(!verifyLogin()){
    header("Location: index.php");
    exit();
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

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    
</head>
<body>

    <header>
        <div class="box" style="height: 130px">
            <h3>Backoffice - Sebastião Alves <?= date("Y"); ?></h3>
            <nav style="padding-top: 10px;">
                <a href="home.php" class="<?= ($page == "home") ? "active" : ""; ?>">Home</a>
                <a href="carousel_e_livros.php" class="<?= ($page == "carousel/livros") ? "active" : ""; ?>">Carousel e Livros</a>
                <a href="autor.php" class="<?= ($page == "autor") ? "active" : ""; ?>">Autor</a>
                <a href="imprensa.php" class="<?= ($page == "imprensa") ? "active" : ""; ?>">Imprensa</a>
                <a href="informacoes.php" class="<?= ($page == "informacoes") ? "active" : ""; ?>">Informações</a>
                <a href="configuracoes.php" class="<?= ($page == "configuracoes") ? "active" : ""; ?>">Configurações</a>
                <a href="sair.php">Sair</a>
            </nav>

            <br>
        </div>
    </header>