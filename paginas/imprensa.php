<?php

if(isset($_GET["pagina"])){
    $pagina = intval($_GET["pagina"]);
}

$pagina_mais_2 = ($pagina+2);

$imprensa = postagensPagina($pagina);

$total_paginas = totalPaginas();

?>

    <script>
        var pagina = "imprensa";
    </script>

    <main>
        <div class="container-fluid d-flex justify-content-end">

            <!--🠗🠗🠗 CAIXA BRANCA 🠗🠗🠗-->
            <div class="row caixa-menus-simples" id="caixa_branca">
                <div class="col menu-menus-simples">
                    <h6>imprensa</h6>
                    <h5>Últimas notícias</h5>                
                </div>
            </div>
        </div>
        <!--🠕🠕🠕 CAIXA BRANCA 🠕🠕🠕-->

        <!--🠗🠗🠗 ÁREA TEXTO 🠗🠗🠗-->
        
        <div class="container-fluid caixa-menu-imprensa">

        <?php foreach($imprensa as $imp): ?>
            <div class="row sub-caixa-imprensa" style="margin-top: 85px;">
                <h5><?= $imp["titulo"]; ?></h5>
                <div class="linha-lancamentos"></div>
                <div class="data-publicacao">Publicado a <?= $imp["data"]; ?></div>
                <img src="<?= $imp["imagem"]; ?>" alt="foto imprensa 2">
                <div style="text-align: left;">
                    <div class="margins-menu-simples texto-imprensa">
                        <?= $imp["texto"]; ?>
                    </div>
                    
                    <br><br>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!--🠕🠕🠕 ÁREA TEXTO 🠕🠕🠕-->    
        
        
        <div class="container-fluid d-none d-xl-block text-center caixa-setas">
            <div class="row setas">

                <div class="numeros">
                    <?php if($pagina > 1): ?>
                        <a href="imprensa.php?pagina=<?= ($pagina > 1) ? $pagina-1 : "1"; ?>" class="seta_esquerda"></a>
                    <?php endif; ?>

                    <?php if($pagina > 3): ?>
                        <a href="imprensa.php?pagina=1" class="numeros">1</a>
                        ...
                    <?php endif; ?>
                <!------------------------------------------------------------------------------------------------------------------------->
                    <?php for($i=($pagina > 3) ? $pagina-1 : "1"; $i <= $pagina_mais_2 && $i<=$total_paginas; $i++): ?>

                        <a href="imprensa.php?pagina=<?= $i; ?>" class=" <?= ($pagina == $i) ? "pagina_activa" : ""; ?> numeros"><?= $i; ?></a>

                    <?php endfor; ?>
                <!------------------------------------------------------------------------------------------------------------------------->
                    
                    <?php if($pagina < ($total_paginas-2)): ?>
                        ...
                        <a href="imprensa.php?pagina=<?= $total_paginas; ?>" class="numeros"><?= $total_paginas; ?></a>
                    <?php endif; ?>
                    
                    <?php if($pagina < $total_paginas): ?>
                        <a href="imprensa.php?pagina=<?= ($pagina < $total_paginas) ? $pagina+1 : $pagina; ?>" class="seta_direita"></a>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>

        <div class="container-fluid d-block d-xl-none text-center caixa-setas">
            <div class="row setas">

                <div class="numeros">
                    <a href="imprensa.php?pagina=<?= ($pagina > 1) ? $pagina-1 : "1"; ?>" class="seta_esquerda"></a>

                    <?php if($pagina > 3): ?>
                        <a href="imprensa.php?pagina=1" class="numeros">1</a>
                        ...
                    <?php endif; ?>
                
                    <?php for($i=($pagina > 2) ? $pagina-1 : "1"; $i <= ($pagina_mais_2-1) && $i<=$total_paginas; $i++): ?>

                        <a href="imprensa.php?pagina=<?= $i; ?>" class=" <?= ($pagina == $i) ? "pagina_activa" : ""; ?> numeros"><?= $i; ?></a>

                    <?php endfor; ?>
                    
                    <?php if($pagina < ($total_paginas-2)): ?>
                        ...
                        <a href="imprensa.php?pagina=<?= $total_paginas; ?>" class="numeros"><?= $total_paginas; ?></a>
                    <?php endif; ?>

                    <a href="imprensa.php?pagina=<?= ($pagina < $total_paginas) ? $pagina+1 : $pagina; ?>" class="seta_direita"></a>
                </div>
                
            </div>
        </div>

    </main>