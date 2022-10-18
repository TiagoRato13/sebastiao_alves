<?php

$sql = "SELECT * FROM home";
$home = selectSQLUnico($sql);

$sql = "SELECT * FROM autor";
$autor = selectSQLUnico($sql);

$sql = "SELECT * FROM livros WHERE destaque=1 AND activo=1";
$destaques = selectSQL($sql);

?>

<main>
        <div class="container-fluid">

            <!--🠗🠗🠗 CAIXA BRANCA 🠗🠗🠗-->
            <div class="row justify-content-end">
                <div class="card caixa-branca mb-3">
                    <div class="row g-0 caixa-branca-conteudo">
                        <div class="col-xl-4">
                            <img src="<?= $home["imagem"]; ?>" class="img-fluid img-bem-vindo" alt="foto">
                        </div>
                        <div class="col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title text-start">bem-vindo ao meu website</h5>
                                <div class="card-text"><?= substr($autor["texto"], 0, 1000); ?>...</div>
                                <div class="d-flex justify-content-center justify-content-xl-end">
                                    <a href="<?= $config["url_base"]; ?>autor.php">
                                        <div class="botao-saber-mais" id="botao-bem-vindo"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--🠕🠕🠕 CAIXA BRANCA 🠕🠕🠕-->

        <!--🠗🠗🠗 ULTIMOS LIVROS 🠗🠗🠗-->
        <div class="container-fluid caixa-ultimos-livros">
            <div class="row">
                <div class="col">
                    <p id="titulo-ultimos-livros">últimos livros</p>
                    <div class="texto-ultimos-livros"><?= $home["texto"]; ?></div>
                </div>
            </div>
        </div>     

        <!--🠕🠕🠕 ULTIMOS LIVROS 🠕🠕🠕-->


        <?php

        $total = 3;
        if(count($destaques) < $total){
            $total = count($destaques);
        }

        ?>
        <!--🠗🠗🠗 CARDS 🠗🠗🠗-->
        <div class="container-fluid">
            <div class="row caixa-cards">
                <div class="col d-xl-flex gap-5 justify-content-center">

                <?php for($i=0; $i<$total; $i++): ?>
                    <?php $c = $destaques[$i]; ?>
                    <div class="card cards-mobile card-size">
                        <img src="<?= $c["capa"]; ?>" class="imagem-cards" alt="livro1">
                        <div class="card-body">
                            <div class="titulo-card"><?=substr($c["titulo"], 0, 35); ?></div>
                            <div class="categoria"><?= $c["observacoes"]; ?></div>
                            <div class="livros-card-text">
                                <?= substr($c["texto"],0,200); ?>...
                            </div>
                            <div class="cardbutton mt-3 mt-xl-2 ">
                                <a href="<?= $config["url_base"]; ?>livros.php?id=<?= $c["id"]; ?>">
                                    <div class="botao-saber-mais"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                    
                </div>
            </div>
        </div>
        <!--🠕🠕🠕 CARDS 🠕🠕🠕-->

    </main>