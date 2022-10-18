<?php

if(isset($_GET["id"])){

    $id = intval($_GET["id"]);
    $sql = "DELETE FROM livros WHERE id=$id";

    iduSQL($sql);    
}
else{
    header("Location: carousel_e_livros.php");
    exit();
}

?>

    <main>
    
        <div class="box">
            <h3 style="color: red">Livro apagado com sucesso!</h3>
        </div>

        <br><br>

        <a href="carousel_e_livros.php">
            <button class="botao">Voltar</button>
        </a>
        
    </main>