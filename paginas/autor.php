<?php

$sql = "SELECT * FROM autor";
$autor = selectSQLUnico($sql);

?>

<script>
    var pagina = "autor";
</script>

<main>
        <div class="container-fluid d-flex justify-content-end">

            <!--🠗🠗🠗 CAIXA BRANCA 🠗🠗🠗-->
            <div class="row caixa-menus-simples" id="caixa_branca">
                <div class="col menu-menus-simples">
                    <h6>autor</h6>
                    <h5>sobre mim</h5>                
                </div>
            </div>
        </div>
        <!--🠕🠕🠕 CAIXA BRANCA 🠕🠕🠕-->

        <!--🠗🠗🠗 ÁREA TEXTO 🠗🠗🠗-->
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-11 col-xl-9 text-center">

                    <div class="text-start text-xl-center imagem-menu-simples">
                        <img src="<?= $autor["imagem"]; ?>" alt="foto autor-'conteudo'" class="foto-autor">
                    </div>

                    <div class="texto-menus-simples text-start" id="texto_pequeno"><?= substr($autor["texto"],0,200); ?></div>
                    <div class="texto-menus-simples text-start" id="texto_completo"><?= $autor["texto"]; ?></div>

                    <div class="cardbutton">
                        <a href="#">
                            <div onclick="verMais()" class="ver-mais botao-menu-simples-ver" id="botao-ver-mais"></div>
                        </a>
                        <a href="#">
                            <div onclick="window.history.back()" class="voltar-atras botao-menu-simples"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--🠕🠕🠕 ÁREA TEXTO 🠕🠕🠕-->      

    </main>