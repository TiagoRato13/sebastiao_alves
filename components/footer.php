<footer>

<div class="linha-separadora-bottom"></div>
<!--🠗🠗🠗 NAVBAR BOT 🠗🠗🠗-->
<div class="container-fluid d-none d-xl-block">
    <div class="row linha-bottom"></div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="########"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="barra-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-bottom <?= ($page == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-bottom <?= ($page == "autor") ? "active" : ""; ?>" aria-current="page" href="autor.php">autor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-bottom <?= ($page == "livros") ? "active" : ""; ?>" onclick="abrirNav()" aria-current="page" href="#">livros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-bottom <?= ($page == "imprensa") ? "active" : ""; ?>" aria-current="page"  href="imprensa.php">imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-bottom <?= ($page == "contactos") ? "active" : ""; ?>" aria-current="page" href="contactos.php">contactos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row linha-bottom"></div>
</div>
<!--🠕🠕🠕 NAVBAR BOT 🠕🠕🠕-->

<!--🠗🠗🠗 RODAPÉ🠗🠗🠗-->
<div class="container-fluid caixa-contactos">
    <div class="row center-contactos-mobile">
        <!--🠗🠗🠗 CONTACTOS 🠗🠗🠗-->
        <?php if(!($page == "contactos")): ?>
        <div class="col-12 col-xl-7 margin-contactos">
            <div class="row contactos">contactos</div>
            <div class="row">
                <div class="col-12 col-xl-5">
                    <div class="row titulo-contactos">morada</div>
                    <div class="row conteudo-contactos"><?= $informacoes["morada"] ;?></div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="row titulo-contactos">telefone</div>
                    <div class="row conteudo-contactos"><?= $informacoes["telefone"] ;?></div>
                </div>
                <div class="col-12 col-xl-2 ms-xl-5">
                    <div class="row titulo-contactos">email</div>
                    <div class="row conteudo-contactos"><?= $informacoes["email"] ;?></div>
                </div>
            </div>
        </div>

        <?php else: ?>
            <div class="col-12 col-xl-7 margin-contactos d-none d-xl-block">
            <div class="row contactos">contactos</div>
            <div class="row">
                <div class="col-12 col-xl-5">
                    <div class="row titulo-contactos">morada</div>
                    <div class="row conteudo-contactos"><?= $informacoes["morada"] ;?></div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="row titulo-contactos">telefone</div>
                    <div class="row conteudo-contactos"><?= $informacoes["telefone"] ;?></div>
                </div>
                <div class="col-12 col-xl-2 ms-xl-5">
                    <div class="row titulo-contactos">email</div>
                    <div class="row conteudo-contactos"><?= $informacoes["email"] ;?></div>
                </div>
            </div>
        </div>

        <?php endif; ?>
        
        <!--🠕🠕🠕 CONTACTOS 🠕🠕🠕-->


        <!--🠗🠗🠗 REDES SOCIAIS 🠗🠗🠗-->
        <div class="col redes-sociais">
            <div class="row">
                <div class="col">siga-me nas redes socais</div>
            </div>
            <div class="row justify-content-center caixa-icons">
                <a href="<?= $informacoes["instagram"] ;?>" class="icones-redes-sociais" id="instagram"> </a>

                <a href="<?= $informacoes["facebook"] ;?>" class="icones-redes-sociais" id="facebook"></a>

                <a href="<?= $informacoes["linkedin"] ;?>" class="icones-redes-sociais" id="linkedin"></a>
            </div>
        </div>
        <!--🠕🠕🠕 REDES SOCIAIS 🠕🠕🠕-->
    </div>
</div>

<div class="container-fluid caixa-contactos-footer d-xl-flex">
    <div class="row justify-content-center">
        <a href="https://www.livroreclamacoes.pt/Inicio/" class="col-3 col-xl-5 icones-contactos">
            <img src="<?= $config["url_public"]; ?>Fotos/desktop/livroreclamacoes.svg" alt="livro reclamações" id="livro-reclamacoes">
        </a>
        <a href="ralc.php" class="col-3 icones-contactos">
            <img src="<?= $config["url_public"]; ?>Fotos/desktop/ralc.svg" alt="ralc" id="ralc">
        </a>
    </div>


    <div class="row offset-xl-5 text-center mt-5 mt-xl-0">
        <div class="texto-politica-cookies">política de cookies.</div>
        <div class="texto-politica-cookies">copyright @ 2021 grupo mediamaster. todos os direitos reservados.</div>
    </div>
</div>
<!--🠕🠕🠕 RODAPÉ 🠕🠕🠕-->

</footer>

<!--JAVASCRIPT BS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--JAVASCRIPT-->

<script src="<?= $config["url_components"]; ?>globais.js"></script>
<script src="<?= $config["url_components"]; ?>funcoes.js"></script>
<script src="<?= $config["url_components"]; ?>main.js"></script>

</body>

</html>