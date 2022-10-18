<?php

$sql = "SELECT * FROM home";
$home = selectSQLUnico($sql);

if(isset($_GET["imagem"]) && isset($_GET["texto"])){
    $id = $_GET["id"];
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    
    $sql = "UPDATE home SET imagem='$imagem', texto='$texto' WHERE id=$id";
    
    iduSQL($sql);
    header("Location: home.php");
}


?>
    
    
    <main>
        <div class="box" style="padding: 10px 0px">
            <form action="" style="padding:20px">
                <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">

                <label for="imagem">Link Imagem:</label>
                <input type="text" name="imagem" value="<?= $home["imagem"] ;?>" style="width:60%">
                <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Foto</button>

                <br><br><br>

                <label for="imagem">Descrição últimos livros:</label><br><br>

                <textarea id="editor" name="texto"><?= $home["texto"]; ?></textarea>
                
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .then( editor => {
                                console.log( editor );
                        } )
                        .catch( error => {
                                console.error( error );
                        } );
                </script>
                <br><br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>