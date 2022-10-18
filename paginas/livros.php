<?php

$id = $_GET["id"];
$sql = "SELECT * FROM livros WHERE id=$id AND activo=1";
$livro = selectSQLUnico($sql);

?>    
    
    <script>
       var pagina = "livros";
    </script>
    
    <main>
        <div class="container-fluid d-flex justify-content-end">

            <!--🠗🠗🠗 CAIXA BRANCA 🠗🠗🠗-->
            <div class="row caixa-menus-simples" id="caixa_branca">
                <div class="col menu-menus-simples">
                    <h6>livros</h6>
                    <h5><?=(isset($livro)) ? $livro["titulo"] : "Livro não encontrado"; ?></h5>                
                </div>
            </div>
        </div>
        <!--🠕🠕🠕 CAIXA BRANCA 🠕🠕🠕-->

        <!--🠗🠗🠗 ÁREA TEXTO 🠗🠗🠗-->
        <div class="container-fluid">
            <?php if(isset($livro)): ?>
                <div class="row justify-content-center">
                    <div class="col col-9 mb-4 mb-xl-5 text-center text-xl-start">
                        <img src="<?= $livro["capa"]; ?>" alt="foto livro" class="imagem-livros">
                        <div class="texto-menus-simples px-3">
                            <?= $livro["texto"]; ?>
                            <div onclick="window.history.back()" class="d-none d-xl-block voltar-atras botao-menu-livros "></div>
                        </div>
                        
                    </div>
                    
                </div>

                
            <?php else: ?>

                <div class="row">
                <div class="col text-center mb-5">
                    Livro não encontrado.
                </div>
                </div>

            <?php endif; ?>
            
            
        </div>

        <!--🠕🠕🠕 ÁREA TEXTO 🠕🠕🠕-->      

    </main>