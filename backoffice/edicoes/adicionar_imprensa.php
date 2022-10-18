<?php

//PEGAR LISTA DE PRODUTOS ANTES DO REGISTO
$sql = "SELECT * FROM imprensa";
$list = selectSQL($sql);

$lp = $list[count($list) - 1]; //LP = Last Product

//REGISTAR NOVO PRODUTO
if(isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data"])){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $data = $_GET["data"];    

    if(!($lp["imagem"] == $imagem && $lp["titulo"] == $titulo && $lp["texto"] == $texto && $lp["data"] == $data)){
        $sql = "INSERT INTO imprensa (imagem, titulo, texto, data) VALUES ('$imagem', '$titulo', '$texto', '$data')";
    
        iduSQL($sql);
        header("Location: imprensa.php");
    }
}

?>
    
    <main>
        <div class="box" style="padding: 10px 0px">

            <h1>Adicionar novo destaque de Imprensa</h1>
            
            <form action="" style="padding:20px">
                <input type="hidden" name="id" required="required" autofocus>

                <label for="imagem">Link Imagem: </label>
                <input type="text" name="imagem" required="required" style="width:60%">
                <button class="botao" type="button" onclick="window.open('./file_manager/tinyfilemanager.php', '', 'width=600,height=600')">Procurar Foto</button>

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

                <label for="data">Data: </label>
                <input type="text" name="data" required="required" style="width:30%">
                
                <br><br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>