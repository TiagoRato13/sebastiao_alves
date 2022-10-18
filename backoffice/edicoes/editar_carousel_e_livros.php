<?php

if(isset($_GET["id"])){
    $id = intval($_GET["id"]);
    $sql = "SELECT * FROM livros WHERE id=$id";
    $c_e_l = selectSQLUnico($sql);   
}
else{
    header("Location: carousel_e_livros.php");
    exit();
}


if(isset($_GET["id"]) && isset($_GET["activo"]) && isset($_GET["capa"]) && isset($_GET["observacoes"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["destaque"]) && isset($_GET["img_desk"]) && isset($_GET["img_mob"])){
    $id = intval($_GET["id"]);
    $activo = $_GET["activo"];
    $capa = $_GET["capa"];
    $observacoes = $_GET["observacoes"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $destaque = $_GET["destaque"];
    $img_desk = $_GET["img_desk"];
    $img_mob = $_GET["img_mob"];
    
    $sql = "UPDATE livros SET activo='$activo', capa='$capa', observacoes='$observacoes', titulo='$titulo', texto='$texto', destaque='$destaque', imagem_desktop='$img_desk', imagem_mobile='$img_mob' WHERE id=$id";
    
    iduSQL($sql);
    header("Location: carousel_e_livros.php");
}


?>
    
    <main>
        <div class="box" style="padding: 10px 0px">
            <form action="" style="padding:20px">
                <input type="hidden" name="id" value="<?= $_GET["id"]; ?>">

                <label for="activo">ACTIVO: </label>
                <select name="activo">
                    <option value="0" <?= ($c_e_l["activo"] == 0) ? "selected='selected'" : ""; ?>>Não</option>
                    <option value="1" <?= ($c_e_l["activo"] == 1) ? "selected='selected'" : ""; ?>>Sim</option>
                </select>

                <br><br><br>

                <label for="capa">Link Capa: </label>
                <input type="text" name="capa" value="<?= $c_e_l["capa"] ;?>" style="width:40%">
                <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Foto</button>
                <br><br><br>

                <label for="observacoes">Observações: </label>
                <input type="text" name="observacoes" value="<?= $c_e_l["observacoes"] ;?>" style="width:40%">
                
                <br><br><br>

                <label for="titulo">Título: </label>
                <input type="text" name="titulo" value="<?= $c_e_l["titulo"] ;?>" style="width:40%">
                
                <br><br><br>

                <label for="texto">Texto: </label>
                <textarea id="editor" name="texto"><?= $c_e_l["texto"]; ?></textarea>
                
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

                <label for="destaque">Destaque da página HOME: </label>
                <select name="destaque">
                    <option value="0" <?= ($c_e_l["destaque"] == 0) ? "selected='selected'" : ""; ?>>Não</option>
                    <option value="1" <?= ($c_e_l["destaque"] == 1) ? "selected='selected'" : ""; ?>>Sim</option>
                </select>

                <br><br><br>

                <label for="img_desk">Link Imagem Desktop: </label>
                <input type="text" name="img_desk" value="<?= $c_e_l["imagem_desktop"] ;?>" style="width:40%">
                <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Foto</button>
                
                <br><br><br>

                <label for="img_mob">Link Imagem Mobile: </label>
                <input type="text" name="img_mob" value="<?= $c_e_l["imagem_mobile"] ;?>" style="width:40%">
                <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Foto</button>
                          
                <br><br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>