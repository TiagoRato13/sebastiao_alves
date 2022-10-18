<?php

//IMPRENSA//
require_once ="base_dados.php";

function getPostagens(){
    $sql = "SELECT * FROM imprensa ORDER BY id DESC";
    $resultados = selectSQL($sql);
    return $resultados;
}

function getTotalPaginas(){
    $elementos_por_pagina = 2;

    $sql = "SELECT id FROM imprensa";
    $resultados = selectSQL($sql);
    $total_elementos = count($resultados);
    $total_paginas = ceil($total_elementos / $elementos_por_pagina);
    return $total_paginas;
}

function getPostagensPagina(){
    $elementos_por_pagina = 2;
    $postagens = getPostagens();

    $inicio = ($pagina - 1) * $elementos_por_pagina;
    $final = $inicio + ($elementos_por_pagina - 1);

    $resultados = array_splice($postagens, $inicio, $elementos_por_pagina);
    return $resultados;


    //array_splice = formula abaixo
    //$resultados = [];

    /*for($i=$inicio; $i<=$final; $i++){
        $resultados[] = $postagens[$i];
        return $resultados;
    }*/
}

?>

<?php

$x = getPostagens();
$total_paginas = getTotalPaginas();

$pagina = 1;

if(isset($_GET["pagina"])){
    $pagina = intval();
}


?>


<a href="index.php?pagina=<?= ($pagina > 1) ? $pagina-1 : "1"; ?>"></a>


<?php for ($i=1; $i <=$total_paginas; $i++): ?>

    <a href="index.php?pagina=<?= $i; ?>" class="<?= ($pagina == $i) ? "activo" : ""; ?>"><?= $i; ?></a>

<?php endfor; ?>

<a href="index.php?pagina=<?= ($pagina < $total_paginas) ? $pagina+1 : $pagina; ?>"></a>


<?php

function getPostagensPagina(){
    $elementos_por_pagina = 2;
    $postagens = getPostagens();

    $inicio = ($pagina - 1) * $elementos_por_pagina;
    $final = $inicio + ($elementos_por_pagina - 1);

    //$resultados = [];

    /*for($i=$inicio; $i<=$final; $i++){
        $resultados[] = $postagens[$i];
        return $resultados;
    }*/

    $resultados = array_splice($postagens, $inicio, $elementos_por_pagina);
    return $resultados;
}

?>



<?php

//BOTOES

//ver mais
onclick="abrir()";

function abrir(){
    let t_m = document.getelementbyid("texto_menor");
    let t_c = document.getelementbyid("texto_completo"); //display none
    let botao = document.getelementbyid("ver-mais");

    t_m.style.display = "none";
    botao.style.display = "none";  ?
    t_c.style.display = "block"; ?


}
//botao nav

var menu = false;

function botaoNav(){

    let navmobile = document.getelementbyID("");
    if(!menu){
        menu.classList.add("active")
        menu = true;
    }
}
?>