<?php

$sql = "SELECT * FROM home";
$home = selectSQLUnico($sql);


?>
    
    
    <main>
        <div class="box" style="padding: 10px 0px">
            <img src="<?= $home["imagem"] ;?>" alt="imagem">

            <br><br>

            <div style="width:90%; margin:auto">
                <p>
                <?= $home["texto"] ;?>
                </p>
            </div>
        </div>

        <br><br><br>

        <a href="editar_home.php?id=<?= $home["id"]; ?>">
            <button class="botao">Editar</button>
        </a>
    </main>


    