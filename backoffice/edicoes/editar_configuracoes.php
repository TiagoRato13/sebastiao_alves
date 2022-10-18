<?php

$id = $_GET["id"];

$sql = "SELECT * FROM admins WHERE id=$id";
$admins = selectSQLUnico($sql);

if(isset($_GET["id"]) && isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["pass"])){
    $id =  intval($_GET["id"]);
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $pass = $_GET["pass"];
    
    $sql = "UPDATE admins SET nome='$nome', email='$email', pass='$pass' WHERE id=$id";
    
    iduSQL($sql);
    header("Location: configuracoes.php");
}


?>
    
    
    <main>
        <div class="box" style="padding: 10px 0px">
            <form action="" style="padding:20px">
                <input type="hidden" name="id" value="<?=$admins["id"]; ?>">

                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?=$admins["nome"]; ?>" style="width:60%">

                <br><br>

                <label for="email">Email:</label>
                <input type="text" name="email" value="<?=$admins["email"]; ?>" style="width:60%">

                <br><br>

                <label for="pass">Password:</label>
                <input type="text" name="pass" value="<?=$admins["pass"]; ?>" style="width:60%">

                <br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>