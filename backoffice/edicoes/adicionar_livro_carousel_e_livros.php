<?php

//PEGAR LISTA DE PRODUTOS ANTES DO REGISTO
$sql = "SELECT * FROM livros";
$list = selectSQL($sql);

$lp = $list[count($list) - 1]; //LP = Last Product

//REGISTAR NOVO PRODUTO
if(isset($_GET["capa"]) && isset($_GET["observacoes"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["destaque"]) && isset($_GET["img_desk"]) && isset($_GET["img_mob"])){
    $capa = $_GET["capa"];
    $observacoes = $_GET["observacoes"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $destaque = $_GET["destaque"];
    $img_desk = $_GET["img_desk"];
    $img_mob = $_GET["img_mob"];
    

    if(!($lp["capa"] == $capa && $lp["observacoes"] == $observacoes && $lp["titulo"] == $titulo && $lp["texto"] == $texto && $lp["destaque"] == $destaque && $lp["imagem_desktop"] == $img_desk && $lp["imagem_mobile"] == $img_mobile)){
        $sql = "INSERT INTO livros (capa, observacoes, titulo, texto, destaque, imagem_desktop, imagem_mobile) VALUES ('$capa', '$observacoes', '$titulo', '$texto', '$destaque', '$img_desk', '$img_mob')";
    
        iduSQL($sql);
    }
    
    header("Location: carousel_e_livros.php");
}

?>
    
    <main>
        <div class="box" style="padding: 10px 0px">

            <h1>Adicionar novo Livro</h1>

            <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Fotos / Links</button>

            <form action="" style="padding:20px">
                <input type="hidden" name="id" required="required" autofocus>

                <label for="capa">Link Capa: </label>
                <input type="text" name="capa" required="required" style="width:40%">

                <br><br><br>

                <label for="observacoes">Observações: </label>
                <input type="text" name="observacoes" required="required" style="width:40%">
                
                <br><br><br>

                <label for="titulo">Título: </label>
                <input type="text" name="titulo" required="required" style="width:40%">
                
                <br><br><br>

                <label for="texto">Texto: </label>
                <textarea id="editor" name="texto"></textarea>
                
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
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>

                <br><br><br>

                <label for="img_desk">Link Imagem Desktop: </label>
                <input type="text" name="img_desk" required="required" style="width:40%">
                
                <br><br><br>

                <label for="img_mob">Link Imagem Mobile: </label>
                <input type="text" name="img_mob" required="required" style="width:40%">
                          
                <br><br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>