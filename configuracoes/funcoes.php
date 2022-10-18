<?php

$destaques_por_pagina = 2;

function getPostagens(){
    $sql = "SELECT * FROM imprensa ORDER BY id DESC";
    return $resultados = selectSQL($sql);
}

function totalPaginas(){
    global $destaques_por_pagina;

    $sql = "SELECT id FROM imprensa";
    $resultados = selectSQL($sql);

    $total_destaques = count($resultados);
    $total_paginas = ceil($total_destaques / $destaques_por_pagina);
    return $total_paginas;
}

function postagensPagina($pagina){    
    global $destaques_por_pagina;

    $postagens = getPostagens();

    $inicio = ($pagina - 1) * $destaques_por_pagina;
    $final = $inicio + ($destaques_por_pagina - 1);

    $resultados = array_splice($postagens, $inicio, $destaques_por_pagina);
    return $resultados;
}
?>