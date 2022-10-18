<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM imprensa WHERE id=$id";
    $imprensa = selectSQLUnico($sql);
}

if(isset($_GET["id"]) && isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data"])){
    $id = $_GET["id"];
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $data = $_GET["data"];

    $sql = "UPDATE imprensa SET imagem='$imagem', titulo='$titulo', texto='$texto', data='$data' WHERE id=$id";
    iduSQL($sql);

    header("Location: imprensa.php");
   
}

?>
    
    
    <main>
        <div class="box" style="padding: 10px 0px">
            <form action="" style="padding:20px">
                <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">

                <label for="imagem">Link Imagem:</label>
                <input type="text" name="imagem" value="<?= $imprensa["imagem"] ;?>" style="width:60%">
                <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Foto</button>

                <br><br><br>

                <label for="titulo">Título:</label>
                <input type="text" name="titulo" value="<?= $imprensa["titulo"] ;?>" style="width:40%">

                <br><br><br>

                <label for="texto">Descrição Texto:</label>

                <textarea id="editor" name="texto"><?= $imprensa["texto"]; ?></textarea>
                
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

                <label for="data">Data de publicação:</label>
                <input type="text" name="data" value="<?= $imprensa["data"] ;?>" style="width:30%">

                <br><br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>