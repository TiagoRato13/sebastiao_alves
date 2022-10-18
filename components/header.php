<?php

$sql = "SELECT * FROM livros WHERE activo=1";
$livros = selectSQL($sql);

$sql = "SELECT * FROM informacoes";
$informacoes = selectSQLUnico($sql);

?>

<!--
/*
*
* Autor: Tiago Rato
* Created: 13/04/2022
* Last edited: 02/06/2022
*
*/
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $config["url_css"]; ?>estilo.css">
    <link rel="stylesheet" href="<?= $config["url_css"]; ?>estilo_menus.css">
    <link rel="stylesheet" href="<?= $config["url_css"]; ?>mobile.css">

    <title>Sebastião Alves</title>
    <link rel="shortcut icon" href="<?= $config["url_public"]; ?>Fotos/desktop/favicon.ico" type="image/x-icon">
</head>

<body oncontextmenu="return false;"> <!--impossibilita right click na pagina-->


    <header>

        <!--🠗🠗🠗 CABECALHO 🠗🠗🠗-->
        <div class="container-fluid cabecalho">

            <!--🠗🠗🠗 TITULO 🠗🠗🠗-->
            <div class="row titulo-cabecalho">
                <div class="col">sebastião alves</div>
            </div>
            <div class="row" id="linha"></div>

            <!--🠕🠕🠕 TITULO 🠕🠕🠕-->

            <!--🠗🠗🠗 NAVBAR TOP 🠗🠗🠗-->
            <div class="row navbar-size">
                <div class="col">
                    <div class="d-flex justify-content-md-center">
                        <nav class="navbar navbar-expand-xl nav-button-position">
                            <div class="container-fluid navbar-mobile">
                                <a class="navbar-brand" href="#"></a>
                                <button onclick="botaoNav()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon botao-nav-mobile" id="botaoNav"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($page == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($page == "autor") ? "active" : ""; ?>" href="autor.php">autor</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link <?= ($page == "livros") ? "active" : ""; ?>" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                livros
                                            </a>
                                            <ul class="dropdown-menu" id="titulo_nav" aria-labelledby="navbarDropdownMenuLink">

                                            <?php foreach($livros as $n): ?>
                                                <li><a class="dropdown-item submenu-livros" href="livros.php?id=<?= $n["id"]; ?>"><?= $n["titulo"]; ?></a></li>
                                            <?php endforeach; ?>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($page == "imprensa") ? "active" : ""; ?>" href="imprensa.php">imprensa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($page == "contactos") ? "active" : ""; ?>" href="contactos.php">contactos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!--🠕🠕🠕 NAVBAR TOP 🠕🠕🠕-->


            <!--🠕🠕🠕 CABECALHO 🠕🠕🠕-->

        </div>

        <!--🠗🠗🠗 CAROUSEL 🠗🠗🠗-->
        <div class="row carousel-size">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators botao-banner">

                    <?php $i=0; ?> 
                    <?php foreach($livros as $c): ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?= ($i+1); ?>"></button>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                    </div>
                    <div class="carousel-inner">

                    <?php $i=0; ?>
                    <?php foreach($livros as $c): ?>
                        <div class="carousel-item <?= ($i == 0) ? 'active' : ''; ?>">
                            <img src="<?= $c["imagem_mobile"]; ?>" class="d-block d-xl-none w-100 carousel-image" alt="senhora do amor e da guerra">
                            <img src="<?= $c["imagem_desktop"]; ?>" class="d-none d-xl-block w-100 carousel-image" alt="senhora do amor e da guerra">
                            <div class="carousel-caption texto-carosel">
                                <div class="novidades"><?= $c["observacoes"]; ?></div>
                                <div class="titulo"><?= $c["titulo"]; ?></div>
                                <div class="descricao-livro"><?= substr($c["texto"],0,301); ?>...</div>
                                
                                <a href="livros.php?id=<?= $c["id"]; ?>">
                                    <div class="botao-saber-mais"></div>
                                </a>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                </div>

            </div>
        </div>
        <!--🠕🠕🠕 CAROUSEL 🠕🠕🠕-->

        <!--🠕🠕🠕 TITULO 🠕🠕🠕-->

    </header>