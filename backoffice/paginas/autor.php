<?php

$sql = "SELECT * FROM autor";
$autor = selectSQLUnico($sql);

?>
    
    
    <main>
        <div class="box" style="padding: 20px 0px">
            <img src="<?= $autor["imagem"] ;?>" alt="imagem">

            <br><br>

            <div style="width:90%; margin:auto">
                <p>
                <?= $autor["texto"] ;?>
                </p>
            </div>
        </div>

        <br><br><br>

        <a href="editar_autor.php?id=<?= $autor["id"]; ?>">
            <button class="botao">Editar</button>
        </a>
    </main>