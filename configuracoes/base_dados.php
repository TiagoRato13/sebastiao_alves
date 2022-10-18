<?php

//VARIAVEIS GLOBAIS
//Dados a serem usados
$base_dados = [
    "hospedagem" => "localhost",
    "usuario" => "root",
    "senha" => "",
    "nome" => "sebastiao_bd"
];

$conexao;

//Fazer a conexao à base de dados
function selectSQL($sql){
    global $base_dados;

    $conexao = mysqli_connect(
        $base_dados["hospedagem"], 
        $base_dados["usuario"], 
        $base_dados["senha"], 
        $base_dados["nome"]
    );

    mysqli_set_charset($conexao, "utf8");

    $busca = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_all($busca, MYSQLI_ASSOC); 

    mysqli_close($conexao);
    
    return $resultado;
}



//Fazer a conexao à base de dados UNICO
function selectSQLUnico($sql){
    global $base_dados;

    $conexao = mysqli_connect(
        $base_dados["hospedagem"], 
        $base_dados["usuario"], 
        $base_dados["senha"], 
        $base_dados["nome"]
    );
    
    mysqli_set_charset($conexao, "utf8");

    $busca = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($busca); //fetch assoc retorna apenas 1 valor pedido

    mysqli_close($conexao);
    
    return $resultado;
}



//INSERT DELETE UPDATE
function iduSQL($sql){ //idu = Insert, Delete, Update
    global $base_dados;

    $conexao = mysqli_connect(
        $base_dados["hospedagem"], 
        $base_dados["usuario"], 
        $base_dados["senha"], 
        $base_dados["nome"]
    );
    mysqli_set_charset($conexao, "utf8");

    $busca = mysqli_query($conexao, $sql);

    mysqli_close($conexao);
}

?>