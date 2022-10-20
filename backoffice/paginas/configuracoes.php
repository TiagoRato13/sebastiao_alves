<?php

$id = $_SESSION["user"]["id"];

$sql = "SELECT * FROM admins WHERE id=$id";
$admins = $_SESSION["user"];

?>

<style>
        h3, h4{
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
            
            <h3>Data de último acesso: <span><?= $_SESSION["user"]["data_ultimo_acesso"] ;?></span></h3>
            <h4>Nome de Administrador: <span><?=$admins["nome"]; ?></span></h4>
            <h4>Email: <span><?=$admins["email"]; ?></span></h4>
            <h4>Password: <span><?=$admins["pass"]; ?></span></h4>
            
        </div>

        <br><br><br>
        
        <a href="editar_configuracoes.php?id=<?=$admins["id"]; ?>">
            <button class="botao">Editar Informações</button>
        </a>
           
    </main>