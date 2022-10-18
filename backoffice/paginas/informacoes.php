<?php

$sql = "SELECT * FROM informacoes";
$info = selectSQLUnico($sql);

?>

    <style>
        h4{
            color: rgb(180, 125, 51);
        }
        span{
            font-size: 14px;
            font-weight: normal;
            color: rgb(77,77,77);
        }
    </style>
    
    
    <main>
        <div class="box" style="padding: 10px 0px">
            
            <h4>Telefone: <span><?= $info["telefone"]; ?></span></h4>
            <h4>Morada: <span><?= $info["morada"]; ?></span></h4>
            <h4>Email: <span><?= $info["email"]; ?></span></h4>
            <h4>Horários: <span><?= $info["horarios"]; ?></span></h4>
            <h4>Instagram: <span><?= $info["instagram"]; ?></span></h4>
            <h4>Facebook: <span><?= $info["facebook"]; ?></span></h4>
            <h4>Linkedin: <span><?= $info["linkedin"]; ?></span></h4>
            
        </div>

        <br><br><br>
        
        <a href="editar_informacoes.php?id=<?= $info["id"]; ?>">
            <button class="botao">Editar Informações</button>
        </a>
           
    </main>