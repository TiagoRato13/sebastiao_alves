<?php

if(isset($_GET["id"])){
    
    $apagado = true;

    $id = intval($_GET["id"]);
    $sql = "DELETE FROM imprensa WHERE id=$id";

    iduSQL($sql);
}
else{
    $apagado = false;
    header("Location: imprensa.php");
    exit();
}

?>

<main>
    
        <div class="box">
            <h3 style="color: red">Destaque Imprensa apagado com sucesso!</h3>
        </div>

        <br><br>

        <a href="imprensa.php">
            <button class="botao">Voltar</button>
        </a>
        
    </main>