<?php

require_once "../configuracoes/base_dados.php";

date_default_timezone_set('Europe/Lisbon');


function login($name, $pass){

    $sql = "SELECT * FROM admins WHERE nome='$name' AND pass='$pass'";
    $logged_user = selectSQLunico($sql);

    if(empty($logged_user)){
        return false;
    }
    else{
        session_start();
        $_SESSION["user"] = $logged_user;

        $data_actual = date("H:i:s - d/m/Y");
        $id = $logged_user["id"];
        $sql = "UPDATE admins SET data_ultimo_acesso ='$data_actual' WHERE id=$id";
        iduSQL($sql);

        return true;
    }
}


function verifyLogin(){

    session_start();

    if(empty($_SESSION["user"])){
        return false;
    }
    else{
        return true;
    }

}

function logout(){
    session_start();

    session_destroy();
}

?>