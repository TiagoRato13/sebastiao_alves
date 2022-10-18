<script>
    var pagina = "contactos";
</script>

<main>
        <div class="container-fluid d-flex justify-content-end">

            <!--🠗🠗🠗 CAIXA BRANCA 🠗🠗🠗-->
            <div class="row caixa-menus-simples" id="caixa_branca">
                <div class="col menu-menus-simples">
                    <h6>contactos</h6>
                    <h5>Pode contactar-me através do e-mail ou telefone</h5>                
                </div>
            </div>
        </div>
        <!--🠕🠕🠕 CAIXA BRANCA 🠕🠕🠕-->

        <!--🠗🠗🠗 ÁREA TEXTO 🠗🠗🠗-->
        <div class="container-fluid caixa-menu-contactos">
            <div class="row sub-caixa-contactos mt-5 mt-xl-0 d-inline-block d-xl-flex justify-content-center">
                <div class="col col-xl-3 text-center">
                    <div class="titulo-contactos">telefone</div>
                    <div class="conteudo-contactos"><?= $informacoes["telefone"]; ?></div>
                </div>
                <div class="col-xl-3 text-center">
                    <div class="titulo-contactos">morada</div>
                    <div class="conteudo-contactos"><?= $informacoes["morada"]; ?></div>
                </div>
                <div class="col-xl-3 text-center">
                    <div class="titulo-contactos">email</div>
                    <div class="conteudo-contactos"><?= $informacoes["email"]; ?></div>
                </div>
            </div>

            <div class="row linha-separadora-contactos"></div>

            <div class="row sub-caixa-contactos d-flex justify-content-center">
                <div class="col text-center">
                    <div class="titulo-contactos">horário</div>
                    <div class="conteudo-contactos"><?= $informacoes["horarios"]; ?></div>
                </div>
            </div>
        </div>

        <!--🠕🠕🠕 ÁREA TEXTO 🠕🠕🠕-->      

    </main>